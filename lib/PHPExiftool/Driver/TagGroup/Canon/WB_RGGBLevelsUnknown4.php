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
class WB_RGGBLevelsUnknown4 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown4';

  protected string $name = 'WB_RGGBLevelsUnknown4';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Unknown 4',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59316
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59594
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59922
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60372
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60894
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61470
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61803
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62213
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62695
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown4',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 4',
      ],
    ],
  ];

}
