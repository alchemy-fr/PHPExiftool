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
class ColorTempDaylight extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempDaylight';

  protected string $name = 'ColorTempDaylight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Daylight',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59203
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59481
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59737
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60007
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60534
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60781
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61126
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61500
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61888
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62309
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62780
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempDaylight',
      'desc' => [
        'en' => 'Color Temp Daylight',
      ],
    ],
  ];

}
