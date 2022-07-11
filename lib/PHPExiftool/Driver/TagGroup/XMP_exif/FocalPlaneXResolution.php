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
class FocalPlaneXResolution extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:FocalPlaneXResolution';

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
       * table_name : XMP::exif
       * line : 406479
       * type : rational
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:FocalPlaneXResolution',
      'desc' => [
        'en' => 'Focal Plane X Resolution',
        'fr' => 'Résolution X du plan focal',
      ],
    ],
  ];

}
