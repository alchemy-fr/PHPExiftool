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
interface TagGroupInterface
{

    /**
     * Return TagGroup Id - TagGroup dependant
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Return the tagGroup name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * A small string about the TagGroup
     *
     * @return string
     */
    public function getDescription(string $lng = 'en'): ?string;

    /**
     * An array of available values for this tag
     * Other values should not be allowed
     *
     * @return array
     */
//    public function getValues(): array;

    /**
     * Returns true if the TagGroup handles list values
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

    public function getPhpType(): ?string;

    /**
     * Returns true if the value can be written in the tag
     *
     * @return bool
     */
    public function isWritable(): bool;

    public function getMaxLength(): int;
}
