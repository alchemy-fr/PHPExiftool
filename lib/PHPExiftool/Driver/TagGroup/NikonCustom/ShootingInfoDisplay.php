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
class ShootingInfoDisplay extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ShootingInfoDisplay';

  protected string $name = 'ShootingInfoDisplay';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shooting Info Display',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213269
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ShootingInfoDisplay',
      'desc' => [
        'en' => 'Shooting Info Display',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215007
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ShootingInfoDisplay',
      'desc' => [
        'en' => 'Shooting Info Display',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225460
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ShootingInfoDisplay',
      'desc' => [
        'en' => 'Shooting Info Display',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226940
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ShootingInfoDisplay',
      'desc' => [
        'en' => 'Shooting Info Display',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230098
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ShootingInfoDisplay',
      'desc' => [
        'en' => 'Shooting Info Display',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234621
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ShootingInfoDisplay',
      'desc' => [
        'en' => 'Shooting Info Display',
      ],
    ],
  ];

}
