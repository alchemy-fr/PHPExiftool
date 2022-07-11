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
class FlashControlBuilt_in extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:FlashControlBuilt-in';

  protected string $name = 'FlashControlBuilt-in';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Control Built-in',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225774
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:FlashControlBuilt-in',
      'desc' => [
        'en' => 'Flash Control Built-in',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227927
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:FlashControlBuilt-in',
      'desc' => [
        'en' => 'Flash Control Built-in',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229487
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:FlashControlBuilt-in',
      'desc' => [
        'en' => 'Flash Control Built-in',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231337
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:FlashControlBuilt-in',
      'desc' => [
        'en' => 'Flash Control Built-in',
      ],
    ],
  ];

}
