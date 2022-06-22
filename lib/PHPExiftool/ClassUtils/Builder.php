<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\ClassUtils;

use Exception;
use PHPExiftool\Driver\AbstractTag;
use PHPExiftool\Driver\AbstractType;
use ReflectionClass;

/**
 * Build and write Tag classes
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Builder
{
    protected string $license = '/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */';
    protected int $xmlLine = 0;
    protected array $duplicateXmlLines = [];
    protected array $conflictingXmlLines = [];
    protected string $namespace = "";
    protected string $classname = "";
    protected array $properties = [];
    protected $extends;
    protected array $uses = [];
    protected array $classAnnotations = [];

    /**
     * @throws Exception
     */
    public function __construct(int $xmlLine, string $namespace, string $classname, array $properties, $extends = null, array $uses = [], array $classAnnotations = [])
    {
        $namespace = trim($namespace, '\\');

        foreach (explode('\\', $namespace) as $piece) {
            if ($piece == '') {
                continue;
            }

            if (!$this->checkPHPVarName($piece)) {
                throw new Exception(sprintf('Invalid namespace %s', $namespace));
            }
        }
        if (!$this->checkPHPVarName($classname)) {
            throw new Exception(sprintf('Invalid namespace %s', $namespace));
        }

        $this->xmlLine = $xmlLine;
        $this->namespace = trim('PHPExiftool\\Driver\\' . $namespace, '\\');
        $this->classname = $classname;
        $this->properties = $properties;
        $this->extends = $extends;
        $this->uses = $uses;
        $this->classAnnotations = $classAnnotations;

        return $this;
    }

    public function addDuplicate(int $xmlLine, bool $conflicting)
    {
        if($conflicting) {
            $this->conflictingXmlLines[] = $xmlLine;
        }
        else {
            $this->duplicateXmlLines[] = $xmlLine;
        }
    }

    public function getDuplicatesXmlLines(): array
    {
        return $this->duplicateXmlLines;
    }

    public function getConflictingXmlLines(): array
    {
        return $this->conflictingXmlLines;
    }

    public function getXmlLine(): int
    {
        return $this->xmlLine;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getClassname(): string
    {
        return $this->classname;
    }

    public function getProperty($property)
    {
        return $this->properties[$property] ?? null;
    }

    public function setProperty($property, $value)
    {
        $this->properties[$property] = $value;
    }

    public function getPathfile(): string
    {
        return __DIR__ . '/../../'
            . str_replace('\\', '/', $this->namespace) . "/"
            . $this->classname . '.php';
    }

    /**
     * @throws Exception
     */
    public function write($force = false): Builder
    {
        if (!$force && file_exists($this->getPathfile())) {
            throw new Exception(sprintf('%s already exists', $this->getPathfile()));
        }

        if (file_exists($this->getPathfile())) {
            unlink($this->getPathfile());
        }

        file_put_contents($this->getPathfile(), $this->generateContent());

        return $this;
    }

    public function generateContent()
    {
        $content = "<?php\n\n<license>\n\nnamespace <namespace>;\n\n";

        foreach ($this->uses as $use) {
            $content .= "use " . ltrim($use, "\\") . ";\n";
        }
        if ($this->uses) {
            $content .= "\n";
        }

        // add debug infos related to xml dump
        if($this->xmlLine > 0) {    // no line number for "type" classes
            $content .= "/**\n * XML line : " . $this->xmlLine . "\n";
            if (!empty($this->duplicateXmlLines)) {
                $content .= " * Duplicates: [" . join(', ', $this->duplicateXmlLines) . "]\n";
                if (!empty($this->conflictingXmlLines)) {
                    $content .= " * Conflictings: [" . join(', ', $this->conflictingXmlLines) . "]\n";
                }
            }
            $content .= " */\n";
        }


        if ($this->classAnnotations) {
            $content .= "/**\n";
            foreach ($this->classAnnotations as $annotation) {
                $content .= " * " . $annotation . "\n";
            }
            $content .= " */\n";
        }

        $content .= "class <classname>";

        if ($this->extends) {
            $content .= " extends <extends>";
        }

        $content .= "\n{\n";

        $content .= $this->generateClassProperties($this->properties);

        $content .= "\n}\n";

        if (!is_dir(dirname($this->getPathfile()))) {
            mkdir(dirname($this->getPathfile()), 0754, true);
        }

        return str_replace(
            ['<license>', '<namespace>', '<classname>', '<spaces>', '<extends>'],
            [$this->license, $this->namespace, $this->classname, '    ', $this->extends],
            $content
        );
    }

    protected function generateClassProperties(array $properties, $depth = 0): string
    {
        $buffer = "";

        foreach ($properties as $key => $value) {

            switch($this->extends) {
                case "AbstractTag":
                    $attributeType = AbstractTag::getAttributeType($key);
                    break;
                case "AbstractType":
                    $attributeType = AbstractType::getAttributeType($key);
                    break;
                default:
                    $attributeType = "string";
            }


            if (is_array($value)) {
                $attributeType = "array";
                $val = "[\n" . $this->generateClassProperties($value, $depth + 1);

                for ($i = 0; $i != $depth; $i++) {
                    $val .= "<spaces>";
                }

                $val .= "<spaces>]";
            }
            else {
                $val = $this->quote($value, $attributeType);
            }
            if ($depth == 0) {
                $buffer .= sprintf("\n<spaces>protected %s \$%s = %s;\n", $attributeType ?: '', $key, $val);
            }
            else {
                for ($i = 0; $i != $depth; $i++) {
                    $buffer .= "<spaces>";
                }
                $buffer .= "<spaces>" . $this->quote($key) . " => " . $val . ",\n";
            }
        }

        return $buffer;
    }

    protected function checkPHPVarName($var)
    {
        return preg_match('/^[a-zA-Z]+[a-zA-Z0-9]*$/', $var);
    }

    protected function quote($value, $type = null): string
    {
        switch($type) {
            case 'string':
                return "'" . str_replace(['\\', '\''], ['\\\\', '\\\''], $value) . "'";
            case 'bool':
                if (in_array(strtolower($value), ['true', 'false'])) {
                    return strtolower($value);
                }
                throw new \InvalidArgumentException(sprintf("\"%s\" can't be converted to bool", $value));
            case 'int':
                $data = strval(intval($value));

                // Do not use PHP_INT_MAX as 32/64 bit dependant
//                if ($data >= -2147483648 && $data <= 2147483647) {
                    return $data;
//                }
                // return "'" . $value . "'";
//                throw new \InvalidArgumentException(sprintf("\"%s\" can't be converted to int", $value));
            default:
                if (ctype_digit(trim($value))) {
                    try {
                        return $this->quote($value, 'int');
                    }
                    catch(\InvalidArgumentException $e) {
                        return $this->quote($value, 'string');
                    }
                }
                if (in_array(strtolower($value), ['true', 'false'])) {
                    return $this->quote($value, 'bool');
                }
                return $this->quote($value, 'string');
        }
    }
}
