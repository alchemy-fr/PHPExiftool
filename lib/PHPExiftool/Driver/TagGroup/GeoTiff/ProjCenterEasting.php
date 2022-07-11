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
class ProjCenterEasting extends AbstractTagGroup
{

  protected string $id = 'GeoTiff:ProjCenterEasting';

  protected string $name = 'ProjCenterEasting';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Proj Center Easting',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GeoTiff::Main
       * line : 139074
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GeoTiff::Main.GeoTiff:ProjCenterEasting',
      'desc' => [
        'en' => 'Proj Center Easting',
      ],
    ],
  ];

}
