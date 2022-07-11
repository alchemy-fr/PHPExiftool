<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FreeMemoryCardImages extends AbstractTagGroup
{

  protected string $id = 'Minolta:FreeMemoryCardImages';

  protected string $name = 'FreeMemoryCardImages';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Free Memory Card Images',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179281
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:FreeMemoryCardImages',
      'desc' => [
        'en' => 'Free Memory Card Images',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179383
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:FreeMemoryCardImages',
      'desc' => [
        'en' => 'Free Memory Card Images',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 180215
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:FreeMemoryCardImages',
      'desc' => [
        'en' => 'Free Memory Card Images',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 180335
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:FreeMemoryCardImages',
      'desc' => [
        'en' => 'Free Memory Card Images',
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181764
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:FreeMemoryCardImages',
      'desc' => [
        'en' => 'Free Memory Card Images',
      ],
    ],
  ];

}
