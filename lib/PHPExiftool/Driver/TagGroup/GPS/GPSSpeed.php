<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSSpeed extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSSpeed';

  protected string $name = 'GPSSpeed';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Speed',
    'fr' => 'Vitesse du récepteur GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132508
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSSpeed',
      'desc' => [
        'en' => 'GPS Speed',
        'fr' => 'Vitesse du récepteur GPS',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142098
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSSpeed',
      'desc' => [
        'en' => 'GPS Speed',
        'fr' => 'Vitesse du récepteur GPS',
      ],
    ],
  ];

}
