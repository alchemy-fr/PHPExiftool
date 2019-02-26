<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFZoneSelected extends AbstractTag
{

    protected $Id = 8222;

    protected $Name = 'AFZoneSelected';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Zone Selected';

    protected $flag_Permanent = true;

    protected $Index = 2;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Center',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Right',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Left',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Bottom',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Bottom Right',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Bottom Left',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Top Left',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Top Right',
        ),
    );

}
