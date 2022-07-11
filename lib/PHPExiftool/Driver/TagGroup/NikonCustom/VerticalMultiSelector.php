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
class VerticalMultiSelector extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:VerticalMultiSelector';

  protected string $name = 'VerticalMultiSelector';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vertical Multi Selector',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216345
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:VerticalMultiSelector',
      'desc' => [
        'en' => 'Vertical Multi Selector',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 219229
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:VerticalMultiSelector',
      'desc' => [
        'en' => 'Vertical Multi Selector',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221689
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:VerticalMultiSelector',
      'desc' => [
        'en' => 'Vertical Multi Selector',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 233584
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:VerticalMultiSelector',
      'desc' => [
        'en' => 'Vertical Multi Selector',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 240301
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:VerticalMultiSelector',
      'desc' => [
        'en' => 'Vertical Multi Selector',
      ],
    ],
  ];

}
