<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class NumberOfFocusPoints extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'NumberOfFocusPoints';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Number Of Focus Points';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '55 Points',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '15 Points',
        ),
        2 => array(
            'Id' => 0,
            'Label' => '39 Points',
        ),
        3 => array(
            'Id' => 1,
            'Label' => '11 Points',
        ),
        4 => array(
            'Id' => 0,
            'Label' => '39 Points',
        ),
        5 => array(
            'Id' => 1,
            'Label' => '11 Points',
        ),
        6 => array(
            'Id' => 0,
            'Label' => '39 Points',
        ),
        7 => array(
            'Id' => 1,
            'Label' => '11 Points',
        ),
    );

}
