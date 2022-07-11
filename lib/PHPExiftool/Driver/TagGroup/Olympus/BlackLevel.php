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
class BlackLevel extends AbstractTagGroup
{

  protected string $id = 'Olympus:BlackLevel';

  protected string $name = 'BlackLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Black Level',
    'fr' => 'Niveau noir',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Main
       * line : 258350
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259042
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
  ];

}
