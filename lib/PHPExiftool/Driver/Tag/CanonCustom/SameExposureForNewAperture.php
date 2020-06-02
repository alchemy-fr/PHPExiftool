<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SameExposureForNewAperture extends AbstractTag
{

    protected $Id = 274;

    protected $Name = 'SameExposureForNewAperture';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Same Exposure For New Aperture';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'ISO Speed',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Shutter Speed',
        ),
        3 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        4 => array(
            'Id' => 1,
            'Label' => 'ISO Speed',
        ),
        5 => array(
            'Id' => 2,
            'Label' => 'ISO Speed/Shutter Speed',
        ),
        6 => array(
            'Id' => 3,
            'Label' => 'Shutter Speed',
        ),
    );

    protected $Index = 'mixed';

}
