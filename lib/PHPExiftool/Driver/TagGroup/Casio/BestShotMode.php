<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BestShotMode extends AbstractTagGroup
{

  protected string $id = 'Casio:BestShotMode';

  protected string $name = 'BestShotMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Best Shot Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Type2
       * line : 86251
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Casio::Type2
       * line : 86346
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    2 => [
      /**
       * table_name : Casio::Type2
       * line : 86461
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    3 => [
      /**
       * table_name : Casio::Type2
       * line : 86632
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    4 => [
      /**
       * table_name : Casio::Type2
       * line : 86744
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    5 => [
      /**
       * table_name : Casio::Type2
       * line : 86860
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    6 => [
      /**
       * table_name : Casio::Type2
       * line : 87013
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    7 => [
      /**
       * table_name : Casio::Type2
       * line : 87175
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    8 => [
      /**
       * table_name : Casio::Type2
       * line : 87283
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    9 => [
      /**
       * table_name : Casio::Type2
       * line : 87389
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    10 => [
      /**
       * table_name : Casio::Type2
       * line : 87518
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    11 => [
      /**
       * table_name : Casio::Type2
       * line : 87681
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    12 => [
      /**
       * table_name : Casio::Type2
       * line : 87813
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    13 => [
      /**
       * table_name : Casio::Type2
       * line : 87854
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    14 => [
      /**
       * table_name : Casio::Type2
       * line : 87999
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    15 => [
      /**
       * table_name : Casio::Type2
       * line : 88051
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    16 => [
      /**
       * table_name : Casio::Type2
       * line : 88210
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    17 => [
      /**
       * table_name : Casio::Type2
       * line : 88381
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    18 => [
      /**
       * table_name : Casio::Type2
       * line : 88526
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    19 => [
      /**
       * table_name : Casio::Type2
       * line : 88578
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    20 => [
      /**
       * table_name : Casio::Type2
       * line : 88746
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    21 => [
      /**
       * table_name : Casio::Type2
       * line : 88912
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    22 => [
      /**
       * table_name : Casio::Type2
       * line : 88951
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    23 => [
      /**
       * table_name : Casio::Type2
       * line : 89088
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    24 => [
      /**
       * table_name : Casio::Type2
       * line : 89229
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    25 => [
      /**
       * table_name : Casio::Type2
       * line : 89263
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
    26 => [
      /**
       * table_name : Casio::Type2
       * line : 89402
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:BestShotMode',
      'desc' => [
        'en' => 'Best Shot Mode',
      ],
    ],
  ];

}
