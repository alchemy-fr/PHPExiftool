<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class UnknownTemperature1 extends AbstractTag
{

    protected $Id = 11;

    protected $Name = 'UnknownTemperature1';

    protected $FullName = 'FLIR::MoreInfo';

    protected $GroupName = 'FLIR';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FLIR';

    protected $g2 = 'Camera';

    protected $Type = 'float';

    protected $Writable = false;

    protected $Description = 'Unknown Temperature 1';

    protected $flag_Permanent = true;

}
