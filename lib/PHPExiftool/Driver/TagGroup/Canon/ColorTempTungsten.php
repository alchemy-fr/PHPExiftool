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
class ColorTempTungsten extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempTungsten';

  protected string $name = 'ColorTempTungsten';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Tungsten',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59248
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59526
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59782
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60052
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60579
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60826
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61171
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61545
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61933
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62354
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62825
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempTungsten',
      'desc' => [
        'en' => 'Color Temp Tungsten',
      ],
    ],
  ];

}
