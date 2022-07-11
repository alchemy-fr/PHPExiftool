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
class SelfTimerShotInterval extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:SelfTimerShotInterval';

  protected string $name = 'SelfTimerShotInterval';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Self Timer Shot Interval',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216008
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218600
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221050
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224564
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231136
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232949
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235872
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:SelfTimerShotInterval',
      'desc' => [
        'en' => 'Self Timer Shot Interval',
      ],
    ],
  ];

}
