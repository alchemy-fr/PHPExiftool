<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FocalPlaneAFPointLocation5 extends AbstractTag
{

    protected $Id = 22;

    protected $Name = 'FocalPlaneAFPointLocation5';

    protected $FullName = 'Sony::Tag202a';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focal Plane AF Point Location 5';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

}
