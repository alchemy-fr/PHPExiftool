<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPAux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LensDistortInfo extends AbstractTag
{

    protected $Id = 'LensDistortInfo';

    protected $Name = 'LensDistortInfo';

    protected $FullName = 'XMP::aux';

    protected $GroupName = 'XMP-aux';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-aux';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Lens Distort Info';

}
