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
class ExifImageWidth extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:ExifImageWidth';

  protected string $name = 'ExifImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exif Image Width',
    'fr' => 'Largeur d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408025
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:ExifImageWidth',
      'desc' => [
        'en' => 'Exif Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
  ];

}
