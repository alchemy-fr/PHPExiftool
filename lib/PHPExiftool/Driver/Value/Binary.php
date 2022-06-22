<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Value;

use PHPExiftool\Exception\InvalidArgumentException;

class Binary implements ValueInterface
{
    protected string $value;

    public function __construct($value)
    {
        $this->set($value);
    }

    public function getType(): string
    {
        return self::TYPE_BINARY;
    }

    public function asString(): string
    {
        return $this->value;
    }

    public function asArray(): array
    {
        return [$this->value];
    }

    public function asBase64(): string
    {
        return base64_encode($this->value);
    }

    public function set($value): Binary
    {
        $this->value = $value;

        return $this;
    }

    public function setBase64Value(string $base64Value): Binary
    {
        if (false === $value = base64_decode($base64Value, true)) {
            throw new InvalidArgumentException('The value should be base64 encoded');
        }

        $this->value = $value;

        return $this;
    }

    public static function loadFromBase64($base64Value): Binary
    {
        if (false === $value = base64_decode($base64Value, true)) {
            throw new InvalidArgumentException('The value should be base64 encoded');
        }

        return new static($value);
    }
}
