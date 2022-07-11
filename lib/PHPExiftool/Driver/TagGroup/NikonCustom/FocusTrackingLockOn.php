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
class FocusTrackingLockOn extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:FocusTrackingLockOn';

  protected string $name = 'FocusTrackingLockOn';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Tracking Lock On',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212246
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212576
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 214857
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224223
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224971
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226631
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229847
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:FocusTrackingLockOn',
      'desc' => [
        'en' => 'Focus Tracking Lock On',
      ],
    ],
  ];

}
