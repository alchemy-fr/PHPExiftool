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
class GPSDestDistanceRef extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:GPSDestDistanceRef';

  protected string $name = 'GPSDestDistanceRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Distance Ref',
    'fr' => 'Référence de la distance à la destination',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 406797
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:GPSDestDistanceRef',
      'desc' => [
        'en' => 'GPS Dest Distance Ref',
        'fr' => 'Référence de la distance à la destination',
      ],
    ],
  ];

}
