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
class ISOStepSize extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ISOStepSize';

  protected string $name = 'ISOStepSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Step Size',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212661
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215250
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217920
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220344
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225067
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230333
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232225
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 239663
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:ISOStepSize',
      'desc' => [
        'en' => 'ISO Step Size',
      ],
    ],
  ];

}
