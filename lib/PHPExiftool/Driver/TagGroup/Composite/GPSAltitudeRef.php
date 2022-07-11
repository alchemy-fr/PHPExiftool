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
class GPSAltitudeRef extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSAltitudeRef';

  protected string $name = 'GPSAltitudeRef';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Altitude Ref',
    'fr' => 'Référence d\'altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 93887
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 93943
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
  ];

}
