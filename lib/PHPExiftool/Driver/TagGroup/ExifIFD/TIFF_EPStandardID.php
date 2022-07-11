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
class TIFF_EPStandardID extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:TIFF-EPStandardID';

  protected string $name = 'TIFF-EPStandardID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'TIFF-EP Standard ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115858
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:TIFF-EPStandardID',
      'desc' => [
        'en' => 'TIFF-EP Standard ID',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 117128
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:TIFF-EPStandardID',
      'desc' => [
        'en' => 'TIFF-EP Standard ID',
      ],
    ],
  ];

}
