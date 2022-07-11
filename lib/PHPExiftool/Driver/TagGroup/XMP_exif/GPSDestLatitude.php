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
class GPSDestLatitude extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:GPSDestLatitude';

  protected string $name = 'GPSDestLatitude';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Latitude',
    'fr' => 'Latitude de destination',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 406857
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:GPSDestLatitude',
      'desc' => [
        'en' => 'GPS Dest Latitude',
        'fr' => 'Latitude de destination',
      ],
    ],
  ];

}
