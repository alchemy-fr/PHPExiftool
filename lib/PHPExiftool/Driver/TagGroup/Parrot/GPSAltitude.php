<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSAltitude extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSAltitude';

  protected string $name = 'GPSAltitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Altitude',
    'fr' => 'Altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282461
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282605
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    2 => [
      /**
       * table_name : Parrot::V3
       * line : 282812
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
  ];

}
