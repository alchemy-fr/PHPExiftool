<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LimitAFAreaModeSelection extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'LimitAFAreaModeSelection';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Limit AF Area Mode Selection';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Restrictions',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Auto-area',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Group-area',
        ),
        3 => array(
            'Id' => 4,
            'Label' => '3D-tracking',
        ),
        4 => array(
            'Id' => 8,
            'Label' => 'Dynamic area (51 points)',
        ),
        5 => array(
            'Id' => 16,
            'Label' => 'Dynamic area (21 points)',
        ),
        6 => array(
            'Id' => 32,
            'Label' => 'Dynamic area (9 points)',
        ),
        7 => array(
            'Id' => 0,
            'Label' => 'No Restrictions',
        ),
        8 => array(
            'Id' => 1,
            'Label' => 'Auto-area',
        ),
        9 => array(
            'Id' => 2,
            'Label' => 'Group-area',
        ),
        10 => array(
            'Id' => 4,
            'Label' => '3D-tracking',
        ),
        11 => array(
            'Id' => 8,
            'Label' => 'Dynamic area (153 points)',
        ),
        12 => array(
            'Id' => 16,
            'Label' => 'Dynamic area (72 points)',
        ),
        13 => array(
            'Id' => 32,
            'Label' => 'Dynamic area (25 points)',
        ),
        14 => array(
            'Id' => 0,
            'Label' => 'No Restrictions',
        ),
        15 => array(
            'Id' => 1,
            'Label' => 'Auto-area',
        ),
        16 => array(
            'Id' => 2,
            'Label' => 'Group-area',
        ),
        17 => array(
            'Id' => 4,
            'Label' => '3D-tracking',
        ),
        18 => array(
            'Id' => 8,
            'Label' => 'Dynamic area (153 points)',
        ),
        19 => array(
            'Id' => 16,
            'Label' => 'Dynamic area (72 points)',
        ),
        20 => array(
            'Id' => 32,
            'Label' => 'Dynamic area (25 points)',
        ),
        21 => array(
            'Id' => 0,
            'Label' => 'No Restrictions',
        ),
        22 => array(
            'Id' => 1,
            'Label' => 'Auto-area',
        ),
        23 => array(
            'Id' => 2,
            'Label' => 'Group-area',
        ),
        24 => array(
            'Id' => 4,
            'Label' => '3D-tracking',
        ),
        25 => array(
            'Id' => 8,
            'Label' => 'Dynamic area (51 points)',
        ),
        26 => array(
            'Id' => 16,
            'Label' => 'Dynamic area (21 points)',
        ),
        27 => array(
            'Id' => 32,
            'Label' => 'Dynamic area (9 points)',
        ),
        28 => array(
            'Id' => 0,
            'Label' => 'No Restrictions',
        ),
        29 => array(
            'Id' => 1,
            'Label' => 'Auto-area',
        ),
        30 => array(
            'Id' => 2,
            'Label' => 'Group-area',
        ),
        31 => array(
            'Id' => 4,
            'Label' => '3D-tracking',
        ),
        32 => array(
            'Id' => 8,
            'Label' => 'Dynamic area (153 points)',
        ),
        33 => array(
            'Id' => 16,
            'Label' => 'Dynamic area (72 points)',
        ),
        34 => array(
            'Id' => 32,
            'Label' => 'Dynamic area (25 points)',
        ),
    );

}
