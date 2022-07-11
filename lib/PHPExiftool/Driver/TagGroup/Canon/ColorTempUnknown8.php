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
class ColorTempUnknown8 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown8';

  protected string $name = 'ColorTempUnknown8';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 8',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59364
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59642
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59970
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60420
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60942
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61617
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61851
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62261
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62743
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown8',
      'desc' => [
        'en' => 'Color Temp Unknown 8',
      ],
    ],
  ];

}
