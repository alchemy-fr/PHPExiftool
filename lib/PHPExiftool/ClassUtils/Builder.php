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
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use ReflectionClass;
use ReflectionProperty;

/**
 * Build and write TagGroup classes
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
//    protected int $xmlLine = 0;
//    protected array $duplicateXmlLines = [];
//    protected array $conflictingXmlLines = [];
    protected string $namespace = "";
    protected string $classname = "";
    protected array $consts = [];
    protected array $properties = [];
    protected $extends;
    protected array $uses = [];
    protected array $classAnnotations = [];
    protected LoggerInterface $logger;

    static ?ReflectionClass $reflectionClass = null;
    private string $rootNamespace;

    /**
     * @throws Exception
     */
    public function __construct(string $rootNamespace, string $namespace, string $classname, array $consts, array $properties, $extends = null, array $uses = [], array $classAnnotations = [])
    {
        // singleton
        if (is_null(self::$reflectionClass) && $extends) {
            self::$reflectionClass = new ReflectionClass("PHPExiftool\\Driver\\" . $extends);
        }

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

        // $this->xmlLine = $xmlLine;
        $this->rootNamespace = $rootNamespace;
        $this->namespace = $namespace;
        $this->classname = $classname;
        $this->properties = $properties;
        $this->consts = $consts;
        $this->extends = $extends;
        $this->uses = $uses;
        $this->classAnnotations = $classAnnotations;

        $this->logger = new NullLogger();

        return $this;
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

//    public function addDuplicate(int $xmlLine, bool $conflicting)
//    {
//        if($conflicting) {
//            $this->conflictingXmlLines[] = $xmlLine;
//        }
//        else {
//            $this->duplicateXmlLines[] = $xmlLine;
//        }
//    }
//
//    public function getXmlLine(): int
//    {
//        return $this->xmlLine;
//    }

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

    public function getPathfile(string $rootPath): string
    {
        $subdir = str_replace('\\', '/', $this->namespace);
        @mkdir($rootPath . '/' . $subdir, 0754, true);
        return $rootPath . '/' . $subdir . '/' . $this->classname . '.php';
    }

    /**
     * @throws Exception
     */
    protected function write(string $rootPath): Builder
    {
        $fp = $this->getPathfile($rootPath);

        if (file_exists($fp)) {
            unlink($fp);
        }

        file_put_contents($fp, $this->generateContent($rootPath));

        return $this;
    }

    public function generateContent(string $rootPath)
    {
        $content = "<?php\n\n<license>\n\nnamespace ".$this->rootNamespace.'\\'.$this->namespace.";\n\n";

        foreach ($this->uses as $use) {
            $content .= "use " . ltrim($use, "\\") . ";\n";
        }
        if ($this->uses) {
            $content .= "\n";
        }

//        // add debug infos related to xml dump
//        if($this->xmlLine > 0) {    // no line number for "type" classes
//            $content .= "/**\n * XML line : " . $this->xmlLine . "\n";
//            if (!empty($this->duplicateXmlLines)) {
//                $content .= " * Duplicates: [" . join(', ', $this->duplicateXmlLines) . "]\n";
//                if (!empty($this->conflictingXmlLines)) {
//                    $content .= " * Conflictings: [" . join(', ', $this->conflictingXmlLines) . "]\n";
//                }
//            }
//            $content .= " */\n";
//        }


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

        $content .= $this->generateClassConsts($this->consts);

        $content .= $this->generateClassProperties($this->properties);

        $content .= "\n}\n";

//        if (!is_dir(dirname($this->getPathfile()))) {
//            mkdir(dirname($this->getPathfile()), 0754, true);
//        }

        return str_replace(
            ['<license>', '<namespace>', '<classname>', '<extends>'],
            [$this->license, $this->namespace, $this->classname, $this->extends],
            $content
        );
    }

    protected function generateClassConsts(array $consts, $depth = 0): string
    {
        $buffer = "";
        $space = "  ";

        foreach ($consts as $key => $value) {
            $buffer .= sprintf("%sconst %s = %s;\n", $space, $key, $this->quote($value));
        }

        return $buffer;
    }

    protected function getAttributeProperty(string $key): ?ReflectionProperty
    {
        static $attrTypes = [];

        if (!array_key_exists($key, $attrTypes)) {
            $attrTypes[$key] = null;
            try {
                $attrTypes[$key] = self::$reflectionClass->getProperty($key);
            }
            catch (Exception $e) {
                // no-op
                // throw new Exception(sprintf("Attribute \"%s\" must be defined in %s", $key, self::$reflectionClass->getName()));
            }
        }

        return $attrTypes[$key];
    }


    protected function generateClassProperties(array $properties, $depth = 0): string
    {
        $buffer = "";
        $space = "  ";
        $spaces = str_repeat($space, $depth);

        foreach ($properties as $key => $value) {

            if ($key === "/**/") {
                // special key to be rendered as comments
                $buffer .= $spaces . $space . "/**\n";
                foreach ($value as $k => $v) {
                    $buffer .= sprintf("%s * %s : %s\n", $spaces . $space, $k, $v);
                }
                $buffer .= $spaces . $space . " */\n";
                continue;
            }


//            switch($this->extends) {
//                case "AbstractTag":
//                    $attributeType = AbstractTag::getAttributeType($key);
//                    break;
//                case "AbstractType":
//                    $attributeType = AbstractType::getAttributeType($key);
//                    break;
//                default:
//                    $attributeType = "string";
//            }

            $visibility = 'private';
            $type = '';
            if (!is_null($attributeProperty = $this->getAttributeProperty($key))) {
                $type = $attributeProperty->getType();
                $type = ($type->allowsNull() ? '?' : '') . $type->getName();
                if ($attributeProperty->isPrivate()) {
                    $visibility = 'private';
                }
                elseif ($attributeProperty->isProtected()) {
                    $visibility = 'protected';
                }
                elseif ($attributeProperty->isPublic()) {
                    $visibility = 'public';
                }
            }

            if (is_array($value)) {
                if ($key === '') {
                    // special case empty key : render down one level
                    $val = $this->generateClassProperties($value, $depth);
                }
                else {
                    $val = "[\n" . $this->generateClassProperties($value, $depth + 1);
                    $val .= $spaces . $space . "]";
                }
            }
            else {
                $val = $this->quote($value, $type);
            }
            if ($depth == 0) {
                $buffer .= sprintf("\n%s%s %s \$%s = %s;\n",
                    $space,
                    $visibility,
                    $type,
                    $key,
                    $val
                );
            }
            else {
                if ($key === '') {
                    // special case empty key : render down one level
                    $buffer .= $val;
                }
                else {
                    $buffer .= $spaces . $space . $this->quote($key) . " => " . $val . ",\n";
                }
            }
        }

        return $buffer;
    }

    protected function generateFlags(string $name)
    {

    }

    protected function checkPHPVarName($var)
    {
        return preg_match('/^[a-z]+[\\w]*$/i', $var);
    }

    protected function quote($value, $type = null): string
    {
        if ($type && $type[0] == '?') {
            // nullable type
            if (is_null($value)) {
                return 'null';
            }
            else {
                return $this->quote($value, substr($type, 1));
            }
        }
        switch ($type) {
            case 'string':
                return "'" . str_replace(['\\', '\''], ['\\\\', '\\\''], $value) . "'";
            case 'bool':
                if (is_bool($value)) {
                    return $value ? "true" : "false";
                }
                if (in_array(strtolower($value), ['true', 'false'])) {
                    return strtolower($value);
                }
                throw new InvalidArgumentException(sprintf("\"%s\" can't be converted to bool", $value));
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
                    catch (InvalidArgumentException $e) {
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
