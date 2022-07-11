<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompressedBitsPerPixel extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:CompressedBitsPerPixel';

  protected string $name = 'CompressedBitsPerPixel';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Compressed Bits Per Pixel',
    'fr' => 'Mode de compression d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405559
       * type : rational
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:CompressedBitsPerPixel',
      'desc' => [
        'en' => 'Compressed Bits Per Pixel',
        'fr' => 'Mode de compression d\'image',
      ],
    ],
  ];

}
