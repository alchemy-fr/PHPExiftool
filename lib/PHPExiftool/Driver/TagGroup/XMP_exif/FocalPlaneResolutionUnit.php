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
class FocalPlaneResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:FocalPlaneResolutionUnit';

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
       * table_name : XMP::exif
       * line : 406405
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:FocalPlaneResolutionUnit',
      'desc' => [
        'en' => 'Focal Plane Resolution Unit',
        'fr' => 'Unité de résolution de plan focal',
      ],
    ],
  ];

}
