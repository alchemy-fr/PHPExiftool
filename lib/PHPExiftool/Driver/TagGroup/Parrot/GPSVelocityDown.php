<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSVelocityDown extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSVelocityDown';

  protected string $name = 'GPSVelocityDown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Velocity Down',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V2
       * line : 282647
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:GPSVelocityDown',
      'desc' => [
        'en' => 'GPS Velocity Down',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V3
       * line : 282854
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:GPSVelocityDown',
      'desc' => [
        'en' => 'GPS Velocity Down',
      ],
    ],
  ];

}
