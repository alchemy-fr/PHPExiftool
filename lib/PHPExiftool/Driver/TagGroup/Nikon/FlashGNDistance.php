<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashGNDistance extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashGNDistance';

  protected string $name = 'FlashGNDistance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash GN Distance',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192929
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193433
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 194005
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194609
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195156
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200206
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201263
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208390
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashGNDistance',
      'desc' => [
        'en' => 'Flash GN Distance',
      ],
    ],
  ];

}
