<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class BitDepth extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'BitDepth';

    protected $FullName = 'mixed';

    protected $GroupName = 'File';

    protected $g0 = 'File';

    protected $g1 = 'File';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Bit Depth';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Custom',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 8,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 16,
        ),
    );

}
