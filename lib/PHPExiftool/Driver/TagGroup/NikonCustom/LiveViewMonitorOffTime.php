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
class LiveViewMonitorOffTime extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:LiveViewMonitorOffTime';

  protected string $name = 'LiveViewMonitorOffTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Live View Monitor Off Time',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216051
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218647
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221097
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223493
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 224081
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224611
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227773
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231183
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232996
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:LiveViewMonitorOffTime',
      'desc' => [
        'en' => 'Live View Monitor Off Time',
      ],
    ],
  ];

}
