<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class GeneralProfileIDC extends AbstractTag
{

    protected $Id = '1.2';

    protected $Name = 'GeneralProfileIDC';

    protected $FullName = 'QuickTime::HEVCConfig';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'General Profile IDC';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Profile',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Main Profile',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Main 10 Profile',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Main Still Picture Profile',
        ),
    );

}
