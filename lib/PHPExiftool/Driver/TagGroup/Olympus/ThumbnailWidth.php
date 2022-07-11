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
class ThumbnailWidth extends AbstractTagGroup
{

  protected string $id = 'Olympus:ThumbnailWidth';

  protected string $name = 'ThumbnailWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Width',
    'fr' => 'Hauteur de la vignette',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::OLYM
       * line : 260546
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::OLYM.Olympus:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Thumbnail
       * line : 262522
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Thumbnail.Olympus:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::thmb2
       * line : 263664
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::thmb2.Olympus:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
  ];

}
