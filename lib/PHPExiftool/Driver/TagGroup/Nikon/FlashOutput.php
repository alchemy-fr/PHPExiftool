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
class FlashOutput extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashOutput';

  protected string $name = 'FlashOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Output',
    'fr' => 'Puissance de l\'éclair',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192883
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193387
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193959
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194942
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200328
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201385
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208512
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashOutput',
      'desc' => [
        'en' => 'Flash Output',
        'fr' => 'Puissance de l\'éclair',
      ],
    ],
  ];

}
