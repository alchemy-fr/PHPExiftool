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
class FocalPlaneXResolution extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:FocalPlaneXResolution';

  protected string $name = 'FocalPlaneXResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Plane X Resolution',
    'fr' => 'Résolution X du plan focal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115601
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FocalPlaneXResolution',
      'desc' => [
        'en' => 'Focal Plane X Resolution',
        'fr' => 'Résolution X du plan focal',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116942
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FocalPlaneXResolution',
      'desc' => [
        'en' => 'Focal Plane X Resolution',
        'fr' => 'Résolution X du plan focal',
      ],
    ],
  ];

}
