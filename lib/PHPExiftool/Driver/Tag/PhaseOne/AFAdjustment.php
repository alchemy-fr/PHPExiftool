<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFAdjustment extends AbstractTag
{

    protected $Id = 615;

    protected $Name = 'AFAdjustment';

    protected $FullName = 'PhaseOne::Main';

    protected $GroupName = 'PhaseOne';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'PhaseOne';

    protected $g2 = 'Camera';

    protected $Type = 'float';

    protected $Writable = true;

    protected $Description = 'AF Adjustment';

    protected $flag_Permanent = true;

}
