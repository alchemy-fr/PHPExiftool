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
class ColorTempAsShot extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempAsShot';

  protected string $name = 'ColorTempAsShot';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp As Shot',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59156
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59434
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59712
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59861
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60311
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60767
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61090
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61409
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61742
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62152
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62634
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempAsShot',
      'desc' => [
        'en' => 'Color Temp As Shot',
      ],
    ],
  ];

}
