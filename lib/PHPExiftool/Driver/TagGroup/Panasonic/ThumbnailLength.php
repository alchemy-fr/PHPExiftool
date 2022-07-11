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
class ThumbnailLength extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ThumbnailLength';

  protected string $name = 'ThumbnailLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Length',
    'fr' => 'Longueur de la vignette',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 279174
       * type : int32uRev
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailLength',
      'desc' => [
        'en' => 'Thumbnail Length',
        'fr' => 'Longueur de la vignette',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::PANA
       * line : 279213
       * type : int32uRev
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailLength',
      'desc' => [
        'en' => 'Thumbnail Length',
        'fr' => 'Longueur de la vignette',
      ],
    ],
  ];

}
