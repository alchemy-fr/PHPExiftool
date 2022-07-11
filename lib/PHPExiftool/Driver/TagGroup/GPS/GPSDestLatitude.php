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
class GPSDestLatitude extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDestLatitude';

  protected string $name = 'GPSDestLatitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Latitude',
    'fr' => 'Latitude de destination',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132730
       * type : rational64u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDestLatitude',
      'desc' => [
        'en' => 'GPS Dest Latitude',
        'fr' => 'Latitude de destination',
      ],
    ],
  ];

}
