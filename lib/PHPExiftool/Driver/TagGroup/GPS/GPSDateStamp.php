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
class GPSDateStamp extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDateStamp';

  protected string $name = 'GPSDateStamp';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Date Stamp',
    'fr' => 'Date GPS',
  ];

  protected int $count = 11;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132992
       * type : string
       * writable : true
       * count : 11
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDateStamp',
      'desc' => [
        'en' => 'GPS Date Stamp',
        'fr' => 'Date GPS',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142272
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSDateStamp',
      'desc' => [
        'en' => 'GPS Date Stamp',
        'fr' => 'Date GPS',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203448
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSDateStamp',
      'desc' => [
        'en' => 'GPS Date Stamp',
        'fr' => 'Date GPS',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301819
       * type : string
       * writable : false
       * count : 11
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSDateStamp',
      'desc' => [
        'en' => 'GPS Date Stamp',
        'fr' => 'Date GPS',
      ],
    ],
  ];

}
