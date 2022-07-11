<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AFCP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'AFCP:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Image',
    'fr' => 'Vignette',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AFCP::Main
       * line : 7
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AFCP::Main.AFCP:ThumbnailImage',
      'desc' => [
        'en' => 'Thumbnail Image',
        'fr' => 'Vignette',
      ],
    ],
  ];

}
