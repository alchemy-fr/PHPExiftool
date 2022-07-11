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
class ExternalFlashZoom extends AbstractTagGroup
{

  protected string $id = 'Olympus:ExternalFlashZoom';

  protected string $name = 'ExternalFlashZoom';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'External Flash Zoom',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255382
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:ExternalFlashZoom',
      'desc' => [
        'en' => 'External Flash Zoom',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259273
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:ExternalFlashZoom',
      'desc' => [
        'en' => 'External Flash Zoom',
      ],
    ],
  ];

}
