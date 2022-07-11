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
class ShutterReleaseButtonAE_L extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ShutterReleaseButtonAE-L';

  protected string $name = 'ShutterReleaseButtonAE-L';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter Release Button AE-L',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214104
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215895
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 219740
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 222200
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222741
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223338
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223958
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224458
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225228
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227577
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231024
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    11 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 234124
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    12 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234994
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
    13 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235819
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:ShutterReleaseButtonAE-L',
      'desc' => [
        'en' => 'Shutter Release Button AE-L',
      ],
    ],
  ];

}
