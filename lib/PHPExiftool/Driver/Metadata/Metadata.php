<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Metadata;

use PHPExiftool\Driver\TagGroupInterface;
use PHPExiftool\Driver\Value\ValueInterface;

/**
 * Metadata Object for mapping a TagGroup to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Metadata
{
    protected TagGroupInterface $tag;
    protected ValueInterface $value;

    public function __construct(TagGroupInterface $tag, ValueInterface $value)
    {
        $this->tag = $tag;
        $this->value = $value;

        return $this;
    }

    public function getTag(): TagGroupInterface
    {
        return $this->tag;
    }

    public function getValue(): ValueInterface
    {
        return $this->value;
    }
}
