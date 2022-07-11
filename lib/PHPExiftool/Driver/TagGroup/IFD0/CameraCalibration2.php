<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraCalibration2 extends AbstractTagGroup
{

  protected string $id = 'IFD0:CameraCalibration2';

  protected string $name = 'CameraCalibration2';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Calibration 2',
    'fr' => 'Calibration d\'appareil 2',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119410
       * type : rational64s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:CameraCalibration2',
      'desc' => [
        'en' => 'Camera Calibration 2',
        'fr' => 'Calibration d\'appareil 2',
      ],
    ],
  ];

}
