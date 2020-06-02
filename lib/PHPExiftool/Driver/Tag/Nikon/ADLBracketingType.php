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
class ADLBracketingType extends AbstractTag
{

    protected $Id = 2180;

    protected $Name = 'ADLBracketingType';

    protected $FullName = 'Nikon::ShotInfoD500';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'ADL Bracketing Type';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '2 Shots',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '3 Shots',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '4 Shots',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '5 Shots',
        ),
    );

}
