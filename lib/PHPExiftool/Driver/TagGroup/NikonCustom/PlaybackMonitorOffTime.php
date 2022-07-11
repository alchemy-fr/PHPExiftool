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
class PlaybackMonitorOffTime extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:PlaybackMonitorOffTime';

  protected string $name = 'PlaybackMonitorOffTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Playback Monitor Off Time',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214682
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216230
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218826
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221276
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224680
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225324
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 228080
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231386
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 233175
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 235109
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235889
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:PlaybackMonitorOffTime',
      'desc' => [
        'en' => 'Playback Monitor Off Time',
      ],
    ],
  ];

}
