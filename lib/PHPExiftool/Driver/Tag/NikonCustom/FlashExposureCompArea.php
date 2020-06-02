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
class FlashExposureCompArea extends AbstractTag
{

    protected $Id = '38.4';

    protected $Name = 'FlashExposureCompArea';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Exposure Comp Area';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Entire frame',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Background only',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Entire Frame',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'Background Only',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Entire Frame',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Background Only',
        ),
        6 => array(
            'Id' => 0,
            'Label' => 'Entire frame',
        ),
        7 => array(
            'Id' => 1,
            'Label' => 'Background only',
        ),
        8 => array(
            'Id' => 0,
            'Label' => 'Entire Frame',
        ),
        9 => array(
            'Id' => 1,
            'Label' => 'Background Only',
        ),
    );

}
