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
class GPSDestDistanceRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDestDistanceRef';

  protected string $name = 'GPSDestDistanceRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Distance Ref',
    'fr' => 'Référence de la distance à la destination',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132878
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDestDistanceRef',
      'desc' => [
        'en' => 'GPS Dest Distance Ref',
        'fr' => 'Référence de la distance à la destination',
      ],
    ],
  ];

}
