<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RAF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class RawImageCropTopLeft extends AbstractTag
{

    protected $Id = 272;

    protected $Name = 'RawImageCropTopLeft';

    protected $FullName = 'FujiFilm::RAF';

    protected $GroupName = 'RAF';

    protected $g0 = 'RAF';

    protected $g1 = 'RAF';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Raw Image Crop Top Left';

    protected $MaxLength = 2;

}
