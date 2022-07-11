<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSSpeedRef extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSSpeedRef';

  protected string $name = 'GPSSpeedRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Speed Ref',
    'fr' => 'Unité de vitesse',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 123216
       * type : string
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSSpeedRef',
      'desc' => [
        'en' => 'GPS Speed Ref',
        'fr' => 'Unité de vitesse',
      ],
    ],
  ];

}
