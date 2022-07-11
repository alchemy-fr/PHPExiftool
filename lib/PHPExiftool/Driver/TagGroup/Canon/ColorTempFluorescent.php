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
class ColorTempFluorescent extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempFluorescent';

  protected string $name = 'ColorTempFluorescent';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Fluorescent',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59261
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59539
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59795
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60065
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60592
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60839
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61184
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61558
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61946
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62367
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62838
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempFluorescent',
      'desc' => [
        'en' => 'Color Temp Fluorescent',
      ],
    ],
  ];

}
