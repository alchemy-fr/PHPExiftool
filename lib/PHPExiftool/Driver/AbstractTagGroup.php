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

use Exception;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation\ExclusionPolicy;
use ReflectionClass;


/**
 * Abstract TagGroup object
 *
 * @ExclusionPolicy("all")
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
abstract class AbstractTagGroup implements TagGroupInterface
{
    public const FLAG_AVOID = 1;
    public const FLAG_BINARY = 2;
    public const FLAG_PERMANENT = 4;
    public const FLAG_PROTECTED = 8;
    public const FLAG_UNSAFE = 16;
    public const FLAG_UNKNOWN = 32;
    public const FLAG_LIST = 64;
    public const FLAG_MANDATORY = 128;
    public const FLAG_BAG = 256;
    public const FLAG_SEQ = 512;
    public const FLAG_ALT = 1024;

//    public const GROUP_ID = '';
    protected string $id = '';
    protected int $flags = 0;
    protected string $name = '';
    protected bool $isWritable = false;
    protected ?string $phpType = null;
    protected int $count = 0;
    protected array $description = [];
    protected array $tags = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function getWriteKey(): string
    {
        return $this->id;
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
        return $this->name;
    }

    /**
     * A small string about the TagGroup
     *
     * @VirtualProperty
     *
     * @param string $lng
     * @return string|null
     */
    public function getDescription(string $lng = 'en'): ?string
    {
        return array_key_exists($lng, $this->description) ? $this->description[$lng] : null;
    }

    /**
     * An array of available values for this tag
     * Other values should not be allowed
     *
     * @VirtualProperty
     *
     * @return array
     */
//    public function getValues(): array
//    {
//        return $this->Values;
//    }

    /**
     * Returns true if the TagGroup handles list values
     *
     * @VirtualProperty
     *
     * @return boolean
     */
    public function isMulti(): bool
    {
        return ($this->flags & self::FLAG_LIST) !== 0;
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
        return ($this->flags & self::FLAG_BINARY) !== 0;
    }

    /**
     * Returns true if the value can be written in the tagGroup
     *
     * @VirtualProperty
     *
     * @return boolean
     */
    public function isWritable(): bool
    {
        return $this->isWritable;
    }

    public function getMaxLength(): int
    {
        return $this->count;
    }

    public function getPhpType(): ?string
    {
        return $this->phpType;
    }


    /**
     * Return the tagname
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getId();
    }

}
