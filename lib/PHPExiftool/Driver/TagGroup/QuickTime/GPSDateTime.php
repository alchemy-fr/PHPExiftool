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
class GPSDateTime extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GPSDateTime';

  protected string $name = 'GPSDateTime';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Date/Time',
    'fr' => 'Date/heure GPS (horloge atomique)',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Stream
       * line : 324961
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Stream.QuickTime:GPSDateTime',
      'desc' => [
        'en' => 'GPS Date/Time',
        'fr' => 'Date/heure GPS (horloge atomique)',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::camm6
       * line : 326753
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm6.QuickTime:GPSDateTime',
      'desc' => [
        'en' => 'GPS Date/Time',
        'fr' => 'Date/heure GPS (horloge atomique)',
      ],
    ],
  ];

}
