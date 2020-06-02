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
class Channel4Flags extends AbstractTag
{

    protected $Id = 80;

    protected $Name = 'Channel4Flags';

    protected $FullName = 'QuickTime::ChannelLayout';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Channel 4 Flags';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Rectangular',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spherical',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Meters',
        ),
    );

}
