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
class GPSDestLongitude extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDestLongitude';

  protected string $name = 'GPSDestLongitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Longitude',
    'fr' => 'Longitude de destination',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132796
       * type : rational64u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDestLongitude',
      'desc' => [
        'en' => 'GPS Dest Longitude',
        'fr' => 'Longitude de destination',
      ],
    ],
  ];

}
