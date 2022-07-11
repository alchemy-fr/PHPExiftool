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
class WB_RGGBLevelsKelvin extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsKelvin';

  protected string $name = 'WB_RGGBLevelsKelvin';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Kelvin',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58923
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59268
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59546
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60072
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60599
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60846
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61191
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61565
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61953
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62374
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62845
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsKelvin',
      'desc' => [
        'en' => 'WB RGGB Levels Kelvin',
      ],
    ],
  ];

}
