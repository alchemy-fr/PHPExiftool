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
class ColorTempUnknown18 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown18';

  protected string $name = 'ColorTempUnknown18';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 18',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60179
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown18',
      'desc' => [
        'en' => 'Color Temp Unknown 18',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60640
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown18',
      'desc' => [
        'en' => 'Color Temp Unknown 18',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62060
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempUnknown18',
      'desc' => [
        'en' => 'Color Temp Unknown 18',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62470
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown18',
      'desc' => [
        'en' => 'Color Temp Unknown 18',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62952
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown18',
      'desc' => [
        'en' => 'Color Temp Unknown 18',
      ],
    ],
  ];

}
