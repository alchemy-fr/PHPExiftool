<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WBRGBLevelsUnknown2 extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'WB_RGBLevelsUnknown2';

    protected $FullName = 'Sigma::WBSettings2';

    protected $GroupName = 'Sigma';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sigma';

    protected $g2 = 'Image';

    protected $Type = 'float';

    protected $Writable = true;

    protected $Description = 'WB RGB Levels Unknown 2';

    protected $flag_Permanent = true;

    protected $MaxLength = 3;

}
