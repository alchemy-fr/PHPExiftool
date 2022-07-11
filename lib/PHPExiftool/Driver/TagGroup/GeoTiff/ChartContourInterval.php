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
class ChartContourInterval extends AbstractTagGroup
{

  protected string $id = 'GeoTiff:ChartContourInterval';

  protected string $name = 'ChartContourInterval';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chart Contour Interval',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GeoTiff::Main
       * line : 139626
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GeoTiff::Main.GeoTiff:ChartContourInterval',
      'desc' => [
        'en' => 'Chart Contour Interval',
      ],
    ],
  ];

}
