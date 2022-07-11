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
class MeteringMode extends AbstractTagGroup
{

  protected string $id = 'Minolta:MeteringMode';

  protected string $name = 'MeteringMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Metering Mode',
    'fr' => 'Mode de mesure',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177629
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:MeteringMode',
      'desc' => [
        'en' => 'Metering Mode',
        'fr' => 'Mode de mesure',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179029
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:MeteringMode',
      'desc' => [
        'en' => 'Metering Mode',
        'fr' => 'Mode de mesure',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181054
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:MeteringMode',
      'desc' => [
        'en' => 'Metering Mode',
        'fr' => 'Mode de mesure',
      ],
    ],
  ];

}
