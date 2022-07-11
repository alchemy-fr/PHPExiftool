<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GeoTiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GeogAngularUnitSize extends AbstractTagGroup
{

  protected string $id = 'GeoTiff:GeogAngularUnitSize';

  protected string $name = 'GeogAngularUnitSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Geog Angular Unit Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GeoTiff::Main
       * line : 134332
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GeoTiff::Main.GeoTiff:GeogAngularUnitSize',
      'desc' => [
        'en' => 'Geog Angular Unit Size',
      ],
    ],
  ];

}
