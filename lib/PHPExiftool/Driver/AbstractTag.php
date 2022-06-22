<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver;

use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation\ExclusionPolicy;
use ReflectionClass;
use ReflectionType;

/**
 * Abstract Tag object
 *
 * @ExclusionPolicy("all")
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
abstract class AbstractTag implements TagInterface
{
    protected string $Id;
    protected string $Name;
    protected string $Type;
    protected string $PHPType;
    protected int $Index;
    protected string $Description;
    protected array $Values;
    protected string $FullName;
    protected string $GroupName;
    protected string $g0;
    protected string $g1;
    protected string $g2;
    protected int $MinLength = 0;
    protected int $MaxLength;
    protected bool $Writable = false;
    protected bool $flag_Avoid = false;
    protected bool $flag_Binary = false;
    protected bool $flag_Permanent = false;
    protected bool $flag_Protected = false;
    protected bool $flag_Unsafe = false;
    protected bool $flag_Unknown = false;
    protected bool $flag_List = false;
    protected bool $flag_Mandatory = false;
    protected bool $flag_Bag = false;
    protected bool $flag_Seq = false;
    protected bool $flag_Alt = false;
    protected string $local_g0;
    protected string $local_g1;
    protected string $local_g2;

    static function getAttributeType(string $key): ?ReflectionType
    {
        static $rc = null;
        static $attrTypes = null;

        if(is_null($rc)) {
            $rc = new ReflectionClass(self::class);
            $attrTypes = [];
        }
        if(!array_key_exists($key, $attrTypes)) {
            $attrTypes[$key] = null;
            try {
                $attrTypes[$key] = $rc->getProperty($key)->getType();
            }
            catch (\Exception $e) {
                // no-op
            }
        }
        return $attrTypes[$key];
    }

    /**
     * Return Tag Id - Tag dependant
     *
     * @VirtualProperty
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * Return the tag name
     *
     * @VirtualProperty
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * A small string about the Tag
     *
     * @VirtualProperty
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * An array of available values for this tag
     * Other values should not be allowed
     *
     * @VirtualProperty
     *
     * @return array
     */
    public function getValues(): array
    {
        return $this->Values;
    }

    /**
     * Returns true if the Tag handles list values
     *
     * @VirtualProperty
     *
     * @return boolean
     */
    public function isMulti(): bool
    {
        return $this->flag_List;
    }

    /**
     * Returns true if the value is binary
     *
     * @VirtualProperty
     *
     * @return boolean
     */
    public function isBinary(): bool
    {
        return $this->flag_Binary;
    }

    /**
     * Returns tag group name
     *
     * @VirtualProperty
     *
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->GroupName;
    }

    /**
     * Returns true if the value can be written in the tag
     *
     * @VirtualProperty
     *
     * @return boolean
     */
    public function isWritable(): bool
    {
        return $this->Writable;
    }

    /**
     * Return the tagname path ; ie GroupName:Name
     *
     * @VirtualProperty
     *
     * @return string
     */
    public function getTagname(): string
    {
        return $this->GroupName . ':' . $this->Name;
    }

    /**
     *
     * @VirtualProperty
     *
     * @return integer
     */
    public function getMinLength(): int
    {
        return $this->MinLength;
    }

    /**
     *
     * @VirtualProperty
     *
     * @return integer
     */
    public function getMaxLength(): int
    {
        return $this->MaxLength;
    }

    /**
     * Return the tagname
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getTagname();
    }

}
