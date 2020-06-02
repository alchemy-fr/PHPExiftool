<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FinishFileType extends AbstractTag
{

    protected $Id = 3512;

    protected $Name = 'FinishFileType';

    protected $FullName = 'Kodak::IFD';

    protected $GroupName = 'KodakIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KodakIFD';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Finish File Type';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'JPEG Best',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'JPEG Better',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'JPEG Good',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'TIFF RGB',
        ),
    );

}
