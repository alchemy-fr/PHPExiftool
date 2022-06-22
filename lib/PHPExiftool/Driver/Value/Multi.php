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

class Multi implements ValueInterface
{
    protected array $value = [];

    public function __construct($value = null)
    {
        if ($value) {
            $this->addValue($value);
        }
    }

    public function getType(): string
    {
        return self::TYPE_MULTI;
    }

    public function addValue($value): Multi
    {
        $this->value = array_merge($this->value, (array) $value);

        return $this;
    }

    public function set($value): Multi
    {
        $this->value = (array) $value;

        return $this;
    }

    public function reset(): Multi
    {
        $this->value = [];

        return $this;
    }

    public function serialize($separator = ' ; '): string
    {
        return implode($separator, $this->value);
    }

    public function asString(): string
    {
        return $this->serialize();
    }

    public function asArray(): array
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->serialize();
    }
}
