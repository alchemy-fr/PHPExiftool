<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Compression extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'Compression';

    protected $FullName = 'Photoshop::ImageData';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Compression';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Uncompressed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'RLE',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'ZIP without prediction',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'ZIP with prediction',
        ),
    );

}
