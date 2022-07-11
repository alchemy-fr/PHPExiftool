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
class CustomSettingsBank extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CustomSettingsBank';

  protected string $name = 'CustomSettingsBank';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom Settings Bank',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212098
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 214755
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217587
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220011
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224707
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229748
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 231873
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235445
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:CustomSettingsBank',
      'desc' => [
        'en' => 'Custom Settings Bank',
      ],
    ],
  ];

}
