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
class ColorTempUnknown2 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown2';

  protected string $name = 'ColorTempUnknown2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 2',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59298
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59576
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59904
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60354
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60876
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61452
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61785
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62195
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62677
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown2',
      'desc' => [
        'en' => 'Color Temp Unknown 2',
      ],
    ],
  ];

}
