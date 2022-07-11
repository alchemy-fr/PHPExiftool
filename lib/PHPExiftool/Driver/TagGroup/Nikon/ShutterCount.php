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
class ShutterCount extends AbstractTagGroup
{

  protected string $id = 'Nikon:ShutterCount';

  protected string $name = 'ShutterCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter Count',
    'fr' => 'Comptage des déclenchements',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199742
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203833
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205698
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205784
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205833
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoD300S
       * line : 205872
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300S.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD300a
       * line : 205901
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300a.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::ShotInfoD300b
       * line : 206071
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300b.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::ShotInfoD3S
       * line : 206389
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3S.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::ShotInfoD3X
       * line : 206428
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3X.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::ShotInfoD3a
       * line : 206457
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3a.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206565
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206576
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    13 => [
      /**
       * table_name : Nikon::ShotInfoD40
       * line : 206681
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD40.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    14 => [
      /**
       * table_name : Nikon::ShotInfoD5000
       * line : 208146
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5000.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    15 => [
      /**
       * table_name : Nikon::ShotInfoD5100
       * line : 208180
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5100.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    16 => [
      /**
       * table_name : Nikon::ShotInfoD5200
       * line : 208214
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5200.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    17 => [
      /**
       * table_name : Nikon::ShotInfoD700
       * line : 208636
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD700.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    18 => [
      /**
       * table_name : Nikon::ShotInfoD7000
       * line : 208670
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD7000.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    19 => [
      /**
       * table_name : Nikon::ShotInfoD80
       * line : 208694
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD80.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    20 => [
      /**
       * table_name : Nikon::ShotInfoD800
       * line : 208921
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD800.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    21 => [
      /**
       * table_name : Nikon::ShotInfoD90
       * line : 209612
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD90.Nikon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
  ];

}
