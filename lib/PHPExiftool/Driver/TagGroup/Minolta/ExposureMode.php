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
class ExposureMode extends AbstractTagGroup
{

  protected string $id = 'Minolta:ExposureMode';

  protected string $name = 'ExposureMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Mode',
    'fr' => 'Mode d\'exposition',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177371
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178650
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179611
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 180466
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185569
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
  ];

}
