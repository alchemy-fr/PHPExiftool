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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Selectable;

/**
 * Container for Metadatas
 *
 * @template-implements Collection<string,Metadata>
 * @template-implements Selectable<string,Metadata>
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class MetadataBag extends ArrayCollection
{

    /**
     * Returns all the elements which key matches the regexp
     *
     * @param string $regexp
     * @return MetadataBag
     */
    public function filterKeysByRegExp(string $regexp): MetadataBag
    {
        $partitions = $this->partition(function($key, $element) use ($regexp) {
            return preg_match($regexp, $key);
        });

        return array_shift($partitions);
    }
}
