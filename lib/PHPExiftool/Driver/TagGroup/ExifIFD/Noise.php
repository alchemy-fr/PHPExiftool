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
class Noise extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:Noise';

  protected string $name = 'Noise';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Noise',
    'fr' => 'Bruit',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115585
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:Noise',
      'desc' => [
        'en' => 'Noise',
        'fr' => 'Bruit',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116926
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:Noise',
      'desc' => [
        'en' => 'Noise',
        'fr' => 'Bruit',
      ],
    ],
  ];

}
