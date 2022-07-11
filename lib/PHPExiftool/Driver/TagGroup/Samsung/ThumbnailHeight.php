<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailHeight extends AbstractTagGroup
{

  protected string $id = 'Samsung:ThumbnailHeight';

  protected string $name = 'ThumbnailHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Height',
    'fr' => 'Hauteur de la vignette',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Thumbnail
       * line : 334595
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::Thumbnail.Samsung:ThumbnailHeight',
      'desc' => [
        'en' => 'Thumbnail Height',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
    1 => [
      /**
       * table_name : Samsung::sec
       * line : 336029
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::sec.Samsung:ThumbnailHeight',
      'desc' => [
        'en' => 'Thumbnail Height',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
  ];

}
