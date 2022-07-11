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
class SubSecTimeOriginal extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SubSecTimeOriginal';

  protected string $name = 'SubSecTimeOriginal';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sub Sec Time Original',
    'fr' => 'Fractions de seconde de DateTimeOriginal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116591
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SubSecTimeOriginal',
      'desc' => [
        'en' => 'Sub Sec Time Original',
        'fr' => 'Fractions de seconde de DateTimeOriginal',
      ],
    ],
  ];

}
