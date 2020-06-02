<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ByteOrderMark extends AbstractTag
{

    protected $Id = 'ByteOrderMark';

    protected $Name = 'ByteOrderMark';

    protected $FullName = 'Text::Main';

    protected $GroupName = 'File';

    protected $g0 = 'File';

    protected $g1 = 'File';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Byte Order Mark';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
