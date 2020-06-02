<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AutoAFPointSelEOSiTRAF extends AbstractTag
{

    protected $Id = 10;

    protected $Name = 'AutoAFPointSelEOSiTRAF';

    protected $FullName = 'Canon::AFConfig';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Auto AF Point Sel EOS iTR AF';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Enable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Disable',
        ),
    );

}
