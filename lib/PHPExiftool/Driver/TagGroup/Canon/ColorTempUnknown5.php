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
class ColorTempUnknown5 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown5';

  protected string $name = 'ColorTempUnknown5';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 5',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59331
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59609
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59937
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60387
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60909
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61485
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61818
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62228
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62710
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown5',
      'desc' => [
        'en' => 'Color Temp Unknown 5',
      ],
    ],
  ];

}
