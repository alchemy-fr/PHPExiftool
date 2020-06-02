<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PanasonicDateTime extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'PanasonicDateTime';

    protected $FullName = 'Panasonic::TimeInfo';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Panasonic Date Time';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

    protected $MaxLength = 8;

}
