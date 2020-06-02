<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ActiveDLighting extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'ActiveD-Lighting';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Active D-Lighting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Normal',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'High',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Extra High',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Extra High 1',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Extra High 2',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Extra High 3',
        ),
        11 => array(
            'Id' => 11,
            'Label' => 'Extra High 4',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'Auto',
        ),
    );

}
