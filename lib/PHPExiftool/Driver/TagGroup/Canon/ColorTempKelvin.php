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
class ColorTempKelvin extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempKelvin';

  protected string $name = 'ColorTempKelvin';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Kelvin',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59272
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59550
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60076
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60603
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60850
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61195
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61569
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61957
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62378
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62849
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempKelvin',
      'desc' => [
        'en' => 'Color Temp Kelvin',
      ],
    ],
  ];

}
