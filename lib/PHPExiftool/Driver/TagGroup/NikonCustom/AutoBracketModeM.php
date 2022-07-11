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
class AutoBracketModeM extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AutoBracketModeM';

  protected string $name = 'AutoBracketModeM';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auto Bracket Mode M',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214409
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214447
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215549
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218129
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220597
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225891
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230628
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232484
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 236299
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:AutoBracketModeM',
      'desc' => [
        'en' => 'Auto Bracket Mode M',
      ],
    ],
  ];

}
