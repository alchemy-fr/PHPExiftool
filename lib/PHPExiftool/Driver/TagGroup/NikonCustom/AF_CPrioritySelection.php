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
class AF_CPrioritySelection extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AF-CPrioritySelection';

  protected string $name = 'AF-CPrioritySelection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF-C Priority Selection',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212126
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 214772
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217604
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220028
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD5100
       * line : 222973
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5100.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223549
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224160
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224735
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226568
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229765
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    10 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 231890
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
    11 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235462
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:AF-CPrioritySelection',
      'desc' => [
        'en' => 'AF-C Priority Selection',
      ],
    ],
  ];

}
