<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FNumber extends AbstractTagGroup
{

  protected string $id = 'Olympus:FNumber';

  protected string $name = 'FNumber';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'F Number',
    'fr' => 'Nombre F',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::AVI
       * line : 250678
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::AVI.Olympus:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::MOV1
       * line : 256877
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MOV1.Olympus:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::MOV2
       * line : 256989
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MOV2.Olympus:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    3 => [
      /**
       * table_name : Olympus::MP4
       * line : 257127
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MP4.Olympus:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    4 => [
      /**
       * table_name : Olympus::OLYM
       * line : 260507
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::OLYM.Olympus:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
  ];

}
