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
class FocalLength extends AbstractTagGroup
{

  protected string $id = 'Olympus:FocalLength';

  protected string $name = 'FocalLength';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focal Length',
    'fr' => 'Focale de l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::MOV1
       * line : 256913
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MOV1.Olympus:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::MOV2
       * line : 257025
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MOV2.Olympus:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
  ];

}
