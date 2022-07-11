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
class ColorTempUnknown13 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown13';

  protected string $name = 'ColorTempUnknown13';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 13',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59419
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59697
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60124
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60486
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60997
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61672
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62005
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62415
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62897
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown13',
      'desc' => [
        'en' => 'Color Temp Unknown 13',
      ],
    ],
  ];

}
