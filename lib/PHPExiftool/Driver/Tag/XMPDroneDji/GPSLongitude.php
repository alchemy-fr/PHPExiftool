<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPDroneDji;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTag
{

    protected $Id = 'GpsLongitude';

    protected $Name = 'GPSLongitude';

    protected $FullName = 'DJI::XMP';

    protected $GroupName = 'XMP-drone-dji';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-drone-dji';

    protected $g2 = 'Location';

    protected $Type = 'real';

    protected $Writable = true;

    protected $Description = 'GPS Longitude';

    protected $flag_Avoid = true;

}
