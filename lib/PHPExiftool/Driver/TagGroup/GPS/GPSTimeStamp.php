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
class GPSTimeStamp extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSTimeStamp';

  protected string $name = 'GPSTimeStamp';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Time Stamp',
    'fr' => 'Heure GPS (horloge atomique)',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132271
       * type : rational64u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSTimeStamp',
      'desc' => [
        'en' => 'GPS Time Stamp',
        'fr' => 'Heure GPS (horloge atomique)',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141879
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSTimeStamp',
      'desc' => [
        'en' => 'GPS Time Stamp',
        'fr' => 'Heure GPS (horloge atomique)',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203330
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSTimeStamp',
      'desc' => [
        'en' => 'GPS Time Stamp',
        'fr' => 'Heure GPS (horloge atomique)',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301656
       * type : rational64u
       * writable : false
       * count : 3
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSTimeStamp',
      'desc' => [
        'en' => 'GPS Time Stamp',
        'fr' => 'Heure GPS (horloge atomique)',
      ],
    ],
  ];

}
