<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPIptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SnapshotUsedVideoFrameTimeFormat extends AbstractTag
{

    protected $Id = 'SnapshotLinkUsedVideoFrameTimeFormat';

    protected $Name = 'SnapshotUsedVideoFrameTimeFormat';

    protected $FullName = 'XMP::iptcExt';

    protected $GroupName = 'XMP-iptcExt';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-iptcExt';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Snapshot Used Video Frame Time Format';

    protected $local_g2 = 'Image';

    protected $flag_List = true;

    protected $Values = array(
        '23976Timecode' => array(
            'Id' => '23976Timecode',
            'Label' => '23.976 fps',
        ),
        '24Timecode' => array(
            'Id' => '24Timecode',
            'Label' => '24 fps',
        ),
        '25Timecode' => array(
            'Id' => '25Timecode',
            'Label' => '25 fps',
        ),
        '2997DropTimecode' => array(
            'Id' => '2997DropTimecode',
            'Label' => '29.97 fps (drop)',
        ),
        '2997NonDropTimecode' => array(
            'Id' => '2997NonDropTimecode',
            'Label' => '29.97 fps (non-drop)',
        ),
        '30Timecode' => array(
            'Id' => '30Timecode',
            'Label' => '30 fps',
        ),
        '50Timecode' => array(
            'Id' => '50Timecode',
            'Label' => '50 fps',
        ),
        '5994DropTimecode' => array(
            'Id' => '5994DropTimecode',
            'Label' => '59.94 fps (drop)',
        ),
        '5994NonDropTimecode' => array(
            'Id' => '5994NonDropTimecode',
            'Label' => '59.94 fps (non-drop)',
        ),
        '60Timecode' => array(
            'Id' => '60Timecode',
            'Label' => '60 fps',
        ),
    );

}
