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
class ColorTempUnknown10 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown10';

  protected string $name = 'ColorTempUnknown10';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 10',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59386
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59664
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59992
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60442
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60964
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61639
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61873
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62283
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62765
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown10',
      'desc' => [
        'en' => 'Color Temp Unknown 10',
      ],
    ],
  ];

}
