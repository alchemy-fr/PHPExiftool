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
class FocalPlaneDiagonal extends AbstractTagGroup
{

  protected string $id = 'Olympus:FocalPlaneDiagonal';

  protected string $name = 'FocalPlaneDiagonal';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Plane Diagonal',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 254346
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:FocalPlaneDiagonal',
      'desc' => [
        'en' => 'Focal Plane Diagonal',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 257347
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:FocalPlaneDiagonal',
      'desc' => [
        'en' => 'Focal Plane Diagonal',
      ],
    ],
  ];

}
