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
class AFPointIllumination extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AFPointIllumination';

  protected string $name = 'AFPointIllumination';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Illumination',
    'fr' => 'Eclairage des collimateurs AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212336
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212367
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216490
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 219055
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221504
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224283
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224902
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226691
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231641
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 233404
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234343
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:AFPointIllumination',
      'desc' => [
        'en' => 'AF Point Illumination',
        'fr' => 'Eclairage des collimateurs AF',
      ],
    ],
  ];

}
