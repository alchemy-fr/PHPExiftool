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
class DewarpData extends AbstractTag
{

    protected $Id = 'DewarpData';

    protected $Name = 'DewarpData';

    protected $FullName = 'DJI::XMP';

    protected $GroupName = 'XMP-drone-dji';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-drone-dji';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Dewarp Data';

    protected $local_g2 = 'Image';

}
