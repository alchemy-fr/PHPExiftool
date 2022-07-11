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
class FocalPlaneResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:FocalPlaneResolutionUnit';

  protected string $name = 'FocalPlaneResolutionUnit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Plane Resolution Unit',
    'fr' => 'Unité de résolution de plan focal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115635
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FocalPlaneResolutionUnit',
      'desc' => [
        'en' => 'Focal Plane Resolution Unit',
        'fr' => 'Unité de résolution de plan focal',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116976
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FocalPlaneResolutionUnit',
      'desc' => [
        'en' => 'Focal Plane Resolution Unit',
        'fr' => 'Unité de résolution de plan focal',
      ],
    ],
  ];

}
