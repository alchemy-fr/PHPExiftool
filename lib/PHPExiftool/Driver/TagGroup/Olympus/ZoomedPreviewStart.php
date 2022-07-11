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
class ZoomedPreviewStart extends AbstractTagGroup
{

  protected string $id = 'Olympus:ZoomedPreviewStart';

  protected string $name = 'ZoomedPreviewStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Zoomed Preview Start',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Main
       * line : 258692
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Olympus::Main.Olympus:ZoomedPreviewStart',
      'desc' => [
        'en' => 'Zoomed Preview Start',
      ],
    ],
  ];

}
