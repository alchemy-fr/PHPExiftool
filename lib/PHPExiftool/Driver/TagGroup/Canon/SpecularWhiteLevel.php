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
class SpecularWhiteLevel extends AbstractTagGroup
{

  protected string $id = 'Canon:SpecularWhiteLevel';

  protected string $name = 'SpecularWhiteLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Specular White Level',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60286
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60731
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61330
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61345
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61354
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData5
       * line : 61387
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData5.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61714
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62102
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62118
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62588
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62600
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 63059
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:SpecularWhiteLevel',
      'desc' => [
        'en' => 'Specular White Level',
      ],
    ],
  ];

}
