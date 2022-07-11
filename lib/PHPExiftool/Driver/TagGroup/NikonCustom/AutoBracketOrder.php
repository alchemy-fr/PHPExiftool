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
class AutoBracketOrder extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AutoBracketOrder';

  protected string $name = 'AutoBracketOrder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auto Bracket Order',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214485
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214500
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215534
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218114
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220582
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225929
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227248
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228436
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229370
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230613
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232469
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    11 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234851
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
    12 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 236340
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:AutoBracketOrder',
      'desc' => [
        'en' => 'Auto Bracket Order',
      ],
    ],
  ];

}
