<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ChannelUsage extends AbstractTag
{

    protected $Id = 4;

    protected $Name = 'ChannelUsage';

    protected $FullName = 'GIF::MIDIControl';

    protected $GroupName = 'GIF';

    protected $g0 = 'GIF';

    protected $g1 = 'GIF';

    protected $g2 = 'Audio';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Channel Usage';

}
