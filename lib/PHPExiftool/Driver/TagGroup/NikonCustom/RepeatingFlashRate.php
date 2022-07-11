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
class RepeatingFlashRate extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:RepeatingFlashRate';

  protected string $name = 'RepeatingFlashRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Repeating Flash Rate',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225818
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227971
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 229051
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229531
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 235317
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
  ];

}
