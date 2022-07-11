<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTagGroup
{

  protected string $id = 'XML:GPSLongitude';

  protected string $name = 'GPSLongitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Longitude',
    'fr' => 'Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLIST::Main
       * line : 265494
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PLIST::Main.XML:GPSLongitude',
      'desc' => [
        'en' => 'GPS Longitude',
        'fr' => 'Longitude',
      ],
    ],
  ];

}
