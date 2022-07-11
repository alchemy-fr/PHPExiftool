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
class WB_RGGBLevelsUnknown13 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown13';

  protected string $name = 'WB_RGGBLevelsUnknown13';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Unknown 13',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59415
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59693
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60120
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60482
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60993
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61668
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62001
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62411
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62893
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown13',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 13',
      ],
    ],
  ];

}
