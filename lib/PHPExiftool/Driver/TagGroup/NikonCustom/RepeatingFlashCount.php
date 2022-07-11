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
class RepeatingFlashCount extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:RepeatingFlashCount';

  protected string $name = 'RepeatingFlashCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Repeating Flash Count',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225810
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227963
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 229043
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229523
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 235309
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
  ];

}
