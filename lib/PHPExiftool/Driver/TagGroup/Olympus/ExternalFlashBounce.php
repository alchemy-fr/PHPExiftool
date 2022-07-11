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
class ExternalFlashBounce extends AbstractTagGroup
{

  protected string $id = 'Olympus:ExternalFlashBounce';

  protected string $name = 'ExternalFlashBounce';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'External Flash Bounce',
    'fr' => 'Réflexion flash externe',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255362
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:ExternalFlashBounce',
      'desc' => [
        'en' => 'External Flash Bounce',
        'fr' => 'Réflexion flash externe',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259246
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:ExternalFlashBounce',
      'desc' => [
        'en' => 'External Flash Bounce',
        'fr' => 'Réflexion flash externe',
      ],
    ],
  ];

}
