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
class ColorTempUnknown12 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown12';

  protected string $name = 'ColorTempUnknown12';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 12',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59408
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59686
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60113
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60475
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60986
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61661
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61994
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62404
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62886
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown12',
      'desc' => [
        'en' => 'Color Temp Unknown 12',
      ],
    ],
  ];

}
