<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FotoStation;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'FotoStation:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Thumbnail Image',
    'fr' => 'Vignette',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FotoStation::Main
       * line : 128535
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'FotoStation::Main.FotoStation:ThumbnailImage',
      'desc' => [
        'en' => 'Thumbnail Image',
        'fr' => 'Vignette',
      ],
    ],
  ];

}
