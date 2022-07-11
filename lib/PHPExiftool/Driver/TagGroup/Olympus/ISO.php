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
class ISO extends AbstractTagGroup
{

  protected string $id = 'Olympus:ISO';

  protected string $name = 'ISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ISO',
    'fr' => 'Sensibilité ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::MOV2
       * line : 257043
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MOV2.Olympus:ISO',
      'desc' => [
        'en' => 'ISO',
        'fr' => 'Sensibilité ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::MovableInfo
       * line : 259560
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::MovableInfo.Olympus:ISO',
      'desc' => [
        'en' => 'ISO',
        'fr' => 'Sensibilité ISO',
      ],
    ],
  ];

}
