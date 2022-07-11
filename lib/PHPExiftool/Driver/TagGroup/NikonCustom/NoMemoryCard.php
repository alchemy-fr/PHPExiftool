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
class NoMemoryCard extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:NoMemoryCard';

  protected string $name = 'NoMemoryCard';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'No Memory Card',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214544
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 214953
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 217015
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222473
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223066
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223657
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226511
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226838
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228166
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230025
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234555
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:NoMemoryCard',
      'desc' => [
        'en' => 'No Memory Card',
      ],
    ],
  ];

}
