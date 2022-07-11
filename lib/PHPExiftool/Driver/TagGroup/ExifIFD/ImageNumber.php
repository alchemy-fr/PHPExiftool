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
class ImageNumber extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ImageNumber';

  protected string $name = 'ImageNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Number',
    'fr' => 'Numéro d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115709
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ImageNumber',
      'desc' => [
        'en' => 'Image Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 117050
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ImageNumber',
      'desc' => [
        'en' => 'Image Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
  ];

}
