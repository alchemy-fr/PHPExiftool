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
class ColorTempUnknown4 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown4';

  protected string $name = 'ColorTempUnknown4';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 4',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59320
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59598
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59926
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60376
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60898
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61474
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61807
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62217
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62699
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown4',
      'desc' => [
        'en' => 'Color Temp Unknown 4',
      ],
    ],
  ];

}
