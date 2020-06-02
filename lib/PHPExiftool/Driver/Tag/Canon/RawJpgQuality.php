<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class RawJpgQuality extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'RawJpgQuality';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Raw Jpg Quality';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-1' => array(
            'Id' => '-1',
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Economy',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Fine',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'RAW',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Superfine',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'CRAW',
        ),
        130 => array(
            'Id' => 130,
            'Label' => 'Normal Movie',
        ),
        131 => array(
            'Id' => 131,
            'Label' => 'Movie (2)',
        ),
    );

}
