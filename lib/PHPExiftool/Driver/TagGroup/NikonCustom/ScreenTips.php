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
class ScreenTips extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ScreenTips';

  protected string $name = 'ScreenTips';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Screen Tips',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213218
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ScreenTips',
      'desc' => [
        'en' => 'Screen Tips',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215068
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ScreenTips',
      'desc' => [
        'en' => 'Screen Tips',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225631
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ScreenTips',
      'desc' => [
        'en' => 'Screen Tips',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227030
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ScreenTips',
      'desc' => [
        'en' => 'Screen Tips',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230173
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ScreenTips',
      'desc' => [
        'en' => 'Screen Tips',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234580
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ScreenTips',
      'desc' => [
        'en' => 'Screen Tips',
      ],
    ],
  ];

}
