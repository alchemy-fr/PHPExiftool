<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrimaryAFPoint extends AbstractTagGroup
{

  protected string $id = 'Nikon:PrimaryAFPoint';

  protected string $name = 'PrimaryAFPoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Primary AF Point',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188751
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 188923
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189013
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189149
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189568
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189585
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 189602
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190075
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190092
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190394
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190723
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 191196
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 191286
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
      'desc' => [
        'en' => 'Primary AF Point',
      ],
    ],
  ];

}
