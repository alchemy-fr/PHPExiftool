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
class Make extends AbstractTagGroup
{

  protected string $id = 'Olympus:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Make',
    'fr' => 'Fabricant',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::AVI
       * line : 249758
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::AVI.Olympus:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::MOV1
       * line : 255953
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::MOV1.Olympus:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::MOV2
       * line : 256935
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::MOV2.Olympus:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    3 => [
      /**
       * table_name : Olympus::MP4
       * line : 257062
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::MP4.Olympus:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    4 => [
      /**
       * table_name : Olympus::OLYM
       * line : 259587
       * type : string
       * writable : false
       * count : 26
       * flags : Permanent
       */
      'id' => 'Olympus::OLYM.Olympus:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    5 => [
      /**
       * table_name : Olympus::prms
       * line : 262668
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::prms.Olympus:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
  ];

}
