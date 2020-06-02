<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceSet extends AbstractTag
{

    protected $Id = 10;

    protected $Name = 'WhiteBalanceSet';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'White Balance Set';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Daylight',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Shade',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Cloudy',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Daylight Fluorescent',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Day White Fluorescent',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'White Fluorescent',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Tungsten',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Flash',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Manual',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Set Color Temperature 1',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Set Color Temperature 2',
        ),
        14 => array(
            'Id' => 14,
            'Label' => 'Set Color Temperature 3',
        ),
    );

}
