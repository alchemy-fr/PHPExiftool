<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PitchAngle extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'PitchAngle';

    protected $FullName = 'Samsung::OrientationInfo';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Camera';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'Pitch Angle';

    protected $flag_Permanent = true;

}
