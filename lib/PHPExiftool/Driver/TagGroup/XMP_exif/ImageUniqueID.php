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
class ImageUniqueID extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:ImageUniqueID';

  protected string $name = 'ImageUniqueID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Unique ID',
    'fr' => 'Identificateur unique d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 407431
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:ImageUniqueID',
      'desc' => [
        'en' => 'Image Unique ID',
        'fr' => 'Identificateur unique d\'image',
      ],
    ],
  ];

}
