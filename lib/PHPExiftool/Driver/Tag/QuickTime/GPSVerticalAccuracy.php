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
class GPSVerticalAccuracy extends AbstractTag
{

    protected $Id = 40;

    protected $Name = 'GPSVerticalAccuracy';

    protected $FullName = 'QuickTime::camm6';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Location';

    protected $Type = 'float';

    protected $Writable = false;

    protected $Description = 'GPS Vertical Accuracy';

}
