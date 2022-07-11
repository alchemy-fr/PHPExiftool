<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsAuto extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsAuto';

  protected string $name = 'WB_RGGBLevelsAuto';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Auto',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58866
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59162
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59440
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59718
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59867
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60317
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60741
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61096
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61415
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61748
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62158
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62640
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsAuto',
      'desc' => [
        'en' => 'WB RGGB Levels Auto',
      ],
    ],
  ];

}
