<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashControlMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashControlMode';

  protected string $name = 'FlashControlMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Control Mode',
    'fr' => 'Mode de Contrôle du Flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192822
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193326
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193898
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194522
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200165
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201219
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208349
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashControlMode',
      'desc' => [
        'en' => 'Flash Control Mode',
        'fr' => 'Mode de Contrôle du Flash',
      ],
    ],
  ];

}
