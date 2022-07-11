<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailOffset extends AbstractTagGroup
{

  protected string $id = 'Sanyo:ThumbnailOffset';

  protected string $name = 'ThumbnailOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Offset',
    'fr' => 'Décalage de la vignette',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::Thumbnail
       * line : 337265
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sanyo::Thumbnail.Sanyo:ThumbnailOffset',
      'desc' => [
        'en' => 'Thumbnail Offset',
        'fr' => 'Décalage de la vignette',
      ],
    ],
  ];

}
