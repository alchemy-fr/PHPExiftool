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
class GPSDateTime extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSDateTime';

  protected string $name = 'GPSDateTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Date/Time',
    'fr' => 'Date/heure GPS (horloge atomique)',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90595
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSDateTime',
      'desc' => [
        'en' => 'GPS Date/Time',
        'fr' => 'Date/heure GPS (horloge atomique)',
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 93792
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSDateTime',
      'desc' => [
        'en' => 'GPS Date/Time',
        'fr' => 'Date/heure GPS (horloge atomique)',
      ],
    ],
    2 => [
      /**
       * table_name : Composite
       * line : 94169
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSDateTime',
      'desc' => [
        'en' => 'GPS Date/Time',
        'fr' => 'Date/heure GPS (horloge atomique)',
      ],
    ],
  ];

}
