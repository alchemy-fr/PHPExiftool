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
class GPSAltitudeRef extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:GPSAltitudeRef';

  protected string $name = 'GPSAltitudeRef';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Altitude Ref',
    'fr' => 'Référence d\'altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 406641
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
  ];

}
