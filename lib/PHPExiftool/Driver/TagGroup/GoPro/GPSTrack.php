<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSTrack extends AbstractTagGroup
{

  protected string $id = 'GoPro:GPSTrack';

  protected string $name = 'GPSTrack';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Track',
    'fr' => 'Direction de déplacement',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GLPI
       * line : 139714
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::GLPI.GoPro:GPSTrack',
      'desc' => [
        'en' => 'GPS Track',
        'fr' => 'Direction de déplacement',
      ],
    ],
  ];

}
