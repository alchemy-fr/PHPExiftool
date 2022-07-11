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
class ShotInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:ShotInfoVersion';

  protected string $name = 'ShotInfoVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shot Info Version',
    'fr' => 'Version des Infos prise de vue',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205638
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD300S
       * line : 205848
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300S.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD300a
       * line : 205887
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300a.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD300b
       * line : 206047
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300b.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD3S
       * line : 206348
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3S.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoD3X
       * line : 206404
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3X.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD3a
       * line : 206443
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3a.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206527
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::ShotInfoD4
       * line : 206649
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::ShotInfoD40
       * line : 206672
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD40.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 206726
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207356
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::ShotInfoD5000
       * line : 208122
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5000.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    13 => [
      /**
       * table_name : Nikon::ShotInfoD5100
       * line : 208161
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5100.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    14 => [
      /**
       * table_name : Nikon::ShotInfoD5200
       * line : 208195
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5200.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    15 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208229
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    16 => [
      /**
       * table_name : Nikon::ShotInfoD610
       * line : 208589
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD610.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    17 => [
      /**
       * table_name : Nikon::ShotInfoD700
       * line : 208612
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD700.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    18 => [
      /**
       * table_name : Nikon::ShotInfoD7000
       * line : 208651
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD7000.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    19 => [
      /**
       * table_name : Nikon::ShotInfoD80
       * line : 208685
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD80.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    20 => [
      /**
       * table_name : Nikon::ShotInfoD800
       * line : 208872
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD800.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    21 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 208936
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    22 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209496
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    23 => [
      /**
       * table_name : Nikon::ShotInfoD90
       * line : 209588
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD90.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    24 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209627
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
    25 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209710
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:ShotInfoVersion',
      'desc' => [
        'en' => 'Shot Info Version',
        'fr' => 'Version des Infos prise de vue',
      ],
    ],
  ];

}
