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
class AutoBracketingSet extends AbstractTag
{

    protected $Id = '12.1';

    protected $Name = 'AutoBracketingSet';

    protected $FullName = 'NikonCustom::SettingsD800';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Auto Bracketing Set';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AE & Flash',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AE Only',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Flash Only',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'WB Bracketing',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Active D-Lighting',
        ),
    );

}
