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
class ColorTempUnknown11 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown11';

  protected string $name = 'ColorTempUnknown11';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 11',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59397
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59675
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60102
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60453
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60464
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60975
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61650
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61983
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62294
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62875
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown11',
      'desc' => [
        'en' => 'Color Temp Unknown 11',
      ],
    ],
  ];

}
