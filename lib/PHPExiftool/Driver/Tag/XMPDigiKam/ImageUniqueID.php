<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPDigiKam;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ImageUniqueID extends AbstractTag
{

    protected $Id = 'ImageUniqueID';

    protected $Name = 'ImageUniqueID';

    protected $FullName = 'XMP::digiKam';

    protected $GroupName = 'XMP-digiKam';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-digiKam';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Image Unique ID';

    protected $flag_Avoid = true;

}
