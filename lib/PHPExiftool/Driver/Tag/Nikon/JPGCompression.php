<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class JPGCompression extends AbstractTag
{

    protected $Id = 2004;

    protected $Name = 'JPGCompression';

    protected $FullName = 'Nikon::ShotInfoD500';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'JPG Compression';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Size Priority',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Optimal Quality',
        ),
    );

}
