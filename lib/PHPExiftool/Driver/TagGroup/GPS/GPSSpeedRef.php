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
class GPSSpeedRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSSpeedRef';

  protected string $name = 'GPSSpeedRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Speed Ref',
    'fr' => 'Unité de vitesse',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132434
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSSpeedRef',
      'desc' => [
        'en' => 'GPS Speed Ref',
        'fr' => 'Unité de vitesse',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142024
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSSpeedRef',
      'desc' => [
        'en' => 'GPS Speed Ref',
        'fr' => 'Unité de vitesse',
      ],
    ],
  ];

}
