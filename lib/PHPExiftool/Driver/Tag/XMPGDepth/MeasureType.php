<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPGDepth;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MeasureType extends AbstractTag
{

    protected $Id = 'MeasureType';

    protected $Name = 'MeasureType';

    protected $FullName = 'XMP::GDepth';

    protected $GroupName = 'XMP-GDepth';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-GDepth';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Measure Type';

    protected $flag_Avoid = true;

    protected $Values = array(
        'OpticalAxis' => array(
            'Id' => 'OpticalAxis',
            'Label' => 'OpticalAxis',
        ),
        'OpticalRay' => array(
            'Id' => 'OpticalRay',
            'Label' => 'OpticalRay',
        ),
    );

}
