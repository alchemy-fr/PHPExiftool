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
class ColorTempUnknown17 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown17';

  protected string $name = 'ColorTempUnknown17';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 17',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60168
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown17',
      'desc' => [
        'en' => 'Color Temp Unknown 17',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60629
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown17',
      'desc' => [
        'en' => 'Color Temp Unknown 17',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62049
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown17',
      'desc' => [
        'en' => 'Color Temp Unknown 17',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62459
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown17',
      'desc' => [
        'en' => 'Color Temp Unknown 17',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62941
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown17',
      'desc' => [
        'en' => 'Color Temp Unknown 17',
      ],
    ],
  ];

}
