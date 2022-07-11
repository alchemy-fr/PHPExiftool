<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailWidth extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ThumbnailWidth';

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
       * table_name : Panasonic::PANA
       * line : 279128
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::PANA
       * line : 279160
       * type : int32uRev
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::PANA
       * line : 279199
       * type : int32uRev
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
  ];

}
