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
class AELockButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AELockButton';

  protected string $name = 'AELockButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Lock Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213734
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213817
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 217269
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222701
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 223298
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223918
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226224
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227419
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228529
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230843
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234921
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:AELockButton',
      'desc' => [
        'en' => 'AE Lock Button',
      ],
    ],
  ];

}
