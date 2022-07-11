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
class ReverseIndicators extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ReverseIndicators';

  protected string $name = 'ReverseIndicators';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Reverse Indicators',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213072
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215122
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217814
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220238
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222553
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223150
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223765
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226478
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227060
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230227
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232123
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    11 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234695
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
    12 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 238088
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:ReverseIndicators',
      'desc' => [
        'en' => 'Reverse Indicators',
      ],
    ],
  ];

}
