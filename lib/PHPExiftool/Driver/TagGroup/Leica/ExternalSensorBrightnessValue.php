<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalSensorBrightnessValue extends AbstractTagGroup
{

  protected string $id = 'Leica:ExternalSensorBrightnessValue';

  protected string $name = 'ExternalSensorBrightnessValue';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'External Sensor Brightness Value',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 275008
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:ExternalSensorBrightnessValue',
      'desc' => [
        'en' => 'External Sensor Brightness Value',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 275292
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica6.Leica:ExternalSensorBrightnessValue',
      'desc' => [
        'en' => 'External Sensor Brightness Value',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 275335
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica9.Leica:ExternalSensorBrightnessValue',
      'desc' => [
        'en' => 'External Sensor Brightness Value',
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279990
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Subdir.Leica:ExternalSensorBrightnessValue',
      'desc' => [
        'en' => 'External Sensor Brightness Value',
      ],
    ],
  ];

}
