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
class ImageHistory extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ImageHistory';

  protected string $name = 'ImageHistory';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image History',
    'fr' => 'Historique de l\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115808
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ImageHistory',
      'desc' => [
        'en' => 'Image History',
        'fr' => 'Historique de l\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 117078
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ImageHistory',
      'desc' => [
        'en' => 'Image History',
        'fr' => 'Historique de l\'image',
      ],
    ],
  ];

}
