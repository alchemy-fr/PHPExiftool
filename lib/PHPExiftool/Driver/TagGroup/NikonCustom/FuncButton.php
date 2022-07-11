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
class FuncButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:FuncButton';

  protected string $name = 'FuncButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Func Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213458
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213565
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215587
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226098
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227263
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230666
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234866
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:FuncButton',
      'desc' => [
        'en' => 'Func Button',
      ],
    ],
  ];

}
