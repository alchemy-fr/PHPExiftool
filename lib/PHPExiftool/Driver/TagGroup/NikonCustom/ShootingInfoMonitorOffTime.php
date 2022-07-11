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
class ShootingInfoMonitorOffTime extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ShootingInfoMonitorOffTime';

  protected string $name = 'ShootingInfoMonitorOffTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shooting Info Monitor Off Time',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214728
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216097
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218693
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221143
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224657
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225370
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227819
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231229
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 233042
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 235183
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235959
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:ShootingInfoMonitorOffTime',
      'desc' => [
        'en' => 'Shooting Info Monitor Off Time',
      ],
    ],
  ];

}
