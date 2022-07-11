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
class ColorTempUnknown6 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown6';

  protected string $name = 'ColorTempUnknown6';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 6',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59342
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59620
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59948
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60398
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60920
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61595
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61829
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62239
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62721
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown6',
      'desc' => [
        'en' => 'Color Temp Unknown 6',
      ],
    ],
  ];

}
