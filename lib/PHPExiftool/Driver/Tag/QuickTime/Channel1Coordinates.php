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
class Channel1Coordinates extends AbstractTag
{

    protected $Id = 24;

    protected $Name = 'Channel1Coordinates';

    protected $FullName = 'QuickTime::ChannelLayout';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = 'float';

    protected $Writable = false;

    protected $Description = 'Channel 1 Coordinates';

    protected $MaxLength = 3;

}
