<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSAltitude extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSAltitude';

  protected string $name = 'GPSAltitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Altitude',
    'fr' => 'Altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90577
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 93851
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
    2 => [
      /**
       * table_name : Composite
       * line : 93869
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
  ];

}
