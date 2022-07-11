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
class AFAssist extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AFAssist';

  protected string $name = 'AFAssist';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Assist',
    'fr' => 'Faisceau d\'assistance AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212438
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 216985
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5000
       * line : 222358
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5000.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 222997
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223588
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224322
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224941
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226730
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228136
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229949
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234313
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
  ];

}
