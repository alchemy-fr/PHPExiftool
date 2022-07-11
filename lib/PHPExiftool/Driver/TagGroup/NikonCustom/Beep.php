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
class Beep extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:Beep';

  protected string $name = 'Beep';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Beep',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213230
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215080
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 216956
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222388
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223027
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223618
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225421
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228107
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230185
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234449
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:Beep',
      'desc' => [
        'en' => 'Beep',
      ],
    ],
  ];

}
