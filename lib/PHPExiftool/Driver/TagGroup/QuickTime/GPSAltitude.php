<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSAltitude extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GPSAltitude';

  protected string $name = 'GPSAltitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Altitude',
    'fr' => 'Altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GPS360Fly
       * line : 313508
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::GPS360Fly.QuickTime:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Stream
       * line : 324925
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Stream.QuickTime:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::camm5
       * line : 326731
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm5.QuickTime:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    3 => [
      /**
       * table_name : QuickTime::camm6
       * line : 326856
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm6.QuickTime:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    4 => [
      /**
       * table_name : QuickTime::tx3g
       * line : 327090
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::tx3g.QuickTime:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
  ];

}
