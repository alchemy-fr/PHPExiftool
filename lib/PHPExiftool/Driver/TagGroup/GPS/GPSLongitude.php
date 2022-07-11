<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSLongitude';

  protected string $name = 'GPSLongitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Longitude',
    'fr' => 'Longitude',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132179
       * type : rational64u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141787
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203238
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301564
       * type : rational64u
       * writable : false
       * count : 3
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
  ];

}
