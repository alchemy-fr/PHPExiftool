<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThermalCalibration extends AbstractTagGroup
{

  protected string $id = 'DJI:ThermalCalibration';

  protected string $name = 'ThermalCalibration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thermal Calibration',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 152950
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'JPEG::Main.DJI:ThermalCalibration',
      'desc' => [
        'en' => 'Thermal Calibration',
      ],
    ],
  ];

}
