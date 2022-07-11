<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JFIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailTIFF extends AbstractTagGroup
{

  protected string $id = 'JFIF:ThumbnailTIFF';

  protected string $name = 'ThumbnailTIFF';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail TIFF',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JFIF::Main
       * line : 152699
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JFIF::Main.JFIF:ThumbnailTIFF',
      'desc' => [
        'en' => 'Thumbnail TIFF',
      ],
    ],
  ];

}
