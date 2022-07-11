<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubTileBlockSize extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SubTileBlockSize';

  protected string $name = 'SubTileBlockSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sub Tile Block Size',
    'fr' => 'Taille de bloc de sous-tuile',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120663
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SubTileBlockSize',
      'desc' => [
        'en' => 'Sub Tile Block Size',
        'fr' => 'Taille de bloc de sous-tuile',
      ],
    ],
  ];

}
