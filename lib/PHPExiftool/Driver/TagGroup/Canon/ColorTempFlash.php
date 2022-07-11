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
class ColorTempFlash extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempFlash';

  protected string $name = 'ColorTempFlash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59287
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59565
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59810
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60091
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60618
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60865
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61210
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61584
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61972
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62393
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62864
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempFlash',
      'desc' => [
        'en' => 'Color Temp Flash',
      ],
    ],
  ];

}
