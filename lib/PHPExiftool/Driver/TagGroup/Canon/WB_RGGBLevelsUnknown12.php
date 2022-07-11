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
class WB_RGGBLevelsUnknown12 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown12';

  protected string $name = 'WB_RGGBLevelsUnknown12';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Unknown 12',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59404
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59682
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60109
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60471
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60982
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61657
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61990
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62400
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62882
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown12',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 12',
      ],
    ],
  ];

}
