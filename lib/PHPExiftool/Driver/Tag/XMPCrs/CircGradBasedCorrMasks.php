<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPCrs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CircGradBasedCorrMasks extends AbstractTag
{

    protected $Id = 'CircularGradientBasedCorrectionsCorrectionMasks';

    protected $Name = 'CircGradBasedCorrMasks';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'struct';

    protected $Writable = true;

    protected $Description = 'Circ Grad Based Corr Masks';

    protected $flag_List = true;

    protected $flag_Seq = true;

}
