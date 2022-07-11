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
class GPSLatitude extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSLatitude';

  protected string $name = 'GPSLatitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Latitude',
    'fr' => 'Latitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90642
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSLatitude',
      'desc' => [
        'en' => 'GPS Latitude',
        'fr' => 'Latitude',
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 93999
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSLatitude',
      'desc' => [
        'en' => 'GPS Latitude',
        'fr' => 'Latitude',
      ],
    ],
    2 => [
      /**
       * table_name : Composite
       * line : 94017
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSLatitude',
      'desc' => [
        'en' => 'GPS Latitude',
        'fr' => 'Latitude',
      ],
    ],
    3 => [
      /**
       * table_name : Composite
       * line : 94180
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSLatitude',
      'desc' => [
        'en' => 'GPS Latitude',
        'fr' => 'Latitude',
      ],
    ],
  ];

}
