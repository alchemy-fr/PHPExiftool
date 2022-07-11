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
class CommandDialsApertureSetting extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CommandDialsApertureSetting';

  protected string $name = 'CommandDialsApertureSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Command Dials Aperture Setting',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214001
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215872
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218494
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220944
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226427
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227523
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231001
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232843
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:CommandDialsApertureSetting',
      'desc' => [
        'en' => 'Command Dials Aperture Setting',
      ],
    ],
  ];

}
