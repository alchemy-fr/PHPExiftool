<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSTimeStamp extends AbstractTagGroup
{

  protected string $id = 'Sony:GPSTimeStamp';

  protected string $name = 'GPSTimeStamp';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Time Stamp',
    'fr' => 'Heure GPS (horloge atomique)',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394015
       * type : rational64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:GPSTimeStamp',
      'desc' => [
        'en' => 'GPS Time Stamp',
        'fr' => 'Heure GPS (horloge atomique)',
      ],
    ],
  ];

}
