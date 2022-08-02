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

class Mono implements ValueInterface
{
    protected string $value;

    public function __construct($value = null)
    {
        $this->set($value);
    }

    public function getType(): string
    {
        return self::TYPE_MONO;
    }

    public function set($value): Mono
    {
        $this->value = (string) $value;

        return $this;
    }

    public function asString(): string
    {
        return $this->value;
    }

    public function asArray(): array
    {
        return [$this->value];
    }

    public function __toString()
    {
        return $this->value;
    }
}
