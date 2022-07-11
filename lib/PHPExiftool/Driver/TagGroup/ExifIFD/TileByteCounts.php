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
class TileByteCounts extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:TileByteCounts';

  protected string $name = 'TileByteCounts';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tile Byte Counts',
    'fr' => 'Nombre d\'octets d\'élément',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111912
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:TileByteCounts',
      'desc' => [
        'en' => 'Tile Byte Counts',
        'fr' => 'Nombre d\'octets d\'élément',
      ],
    ],
  ];

}
