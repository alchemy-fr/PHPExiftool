<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSLongitude';

  protected string $name = 'GPSLongitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Longitude',
    'fr' => 'Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 123162
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::GPS_UUID
       * line : 123486
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::GPS_UUID.FLIR:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
  ];

}
