<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class BatteryType extends AbstractTag
{

    protected $Id = 102;

    protected $Name = 'BatteryType';

    protected $FullName = 'Reconyx::Type3';

    protected $GroupName = 'Reconyx';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Reconyx';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Battery Type';

    protected $flag_Permanent = true;

}
