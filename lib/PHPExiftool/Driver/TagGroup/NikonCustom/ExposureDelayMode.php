<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureDelayMode extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ExposureDelayMode';

  protected string $name = 'ExposureDelayMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Delay Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213014
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215437
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218070
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220538
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222594
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223191
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223806
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225529
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227162
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228835
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230527
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    11 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232419
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
    12 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234780
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ExposureDelayMode',
      'desc' => [
        'en' => 'Exposure Delay Mode',
      ],
    ],
  ];

}
