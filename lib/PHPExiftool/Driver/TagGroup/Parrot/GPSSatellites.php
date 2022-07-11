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
class GPSSatellites extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSSatellites';

  protected string $name = 'GPSSatellites';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Satellites',
    'fr' => 'Satellites GPS utilisés pour la mesure',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282479
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:GPSSatellites',
      'desc' => [
        'en' => 'GPS Satellites',
        'fr' => 'Satellites GPS utilisés pour la mesure',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282623
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:GPSSatellites',
      'desc' => [
        'en' => 'GPS Satellites',
        'fr' => 'Satellites GPS utilisés pour la mesure',
      ],
    ],
    2 => [
      /**
       * table_name : Parrot::V3
       * line : 282830
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:GPSSatellites',
      'desc' => [
        'en' => 'GPS Satellites',
        'fr' => 'Satellites GPS utilisés pour la mesure',
      ],
    ],
  ];

}
