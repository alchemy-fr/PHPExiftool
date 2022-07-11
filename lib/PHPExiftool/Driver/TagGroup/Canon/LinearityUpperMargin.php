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
class LinearityUpperMargin extends AbstractTagGroup
{

  protected string $id = 'Canon:LinearityUpperMargin';

  protected string $name = 'LinearityUpperMargin';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Linearity Upper Margin',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60289
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60734
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61333
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61348
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61357
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61717
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62105
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62121
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62591
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62603
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData9
       * line : 63062
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:LinearityUpperMargin',
      'desc' => [
        'en' => 'Linearity Upper Margin',
      ],
    ],
  ];

}
