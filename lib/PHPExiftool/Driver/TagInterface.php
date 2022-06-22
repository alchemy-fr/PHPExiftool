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

/**
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
interface TagInterface
{

    /**
     * Return Tag Id - Tag dependant
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Return the tag name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * A small string about the Tag
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * An array of available values for this tag
     * Other values should not be allowed
     *
     * @return array
     */
    public function getValues(): array;

    /**
     * Returns true if the Tag handles list values
     *
     * @return boolean
     */
    public function isMulti(): bool;

    /**
     * Returns true if the value is binary
     *
     * @return bool
     */
    public function isBinary(): bool;

    /**
     * Returns tag group name
     *
     * @return string
     */
    public function getGroupName(): string;

    /**
     * Returns true if the value can be written in the tag
     *
     * @return bool
     */
    public function isWritable(): bool;

    /**
     * Return the tagname path ; ie GroupName:Name
     *
     * @return string
     */
    public function getTagname(): string;

    public function getMinLength(): int;

    public function getMaxLength(): int;
}
