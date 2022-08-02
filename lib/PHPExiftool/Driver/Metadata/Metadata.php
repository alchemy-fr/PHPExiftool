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
use PHPExiftool\Driver\Value\Mono;
use PHPExiftool\Driver\Value\Multi;
use PHPExiftool\Driver\Value\ValueInterface;

/**
 * Metadata Object to map a TagGroup to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class Metadata
{
    protected TagGroupInterface $tagGroup;
    protected ValueInterface $value;

    public function __construct(TagGroupInterface $tagGroup, ValueInterface $value = NULL)
    {
        $this->tagGroup = $tagGroup;
        if(!$value) {
            $value = $tagGroup->isMulti() ? new Multi() : new Mono();
        }
        $this->value = $value;

        return $this;
    }

    public function getTagGroup(): TagGroupInterface
    {
        return $this->tagGroup;
    }

    public function getValue(): ValueInterface
    {
        return $this->value;
    }

    public function setValue($value): self
    {
        $this->value->set($value);

        return $this;
    }
}
