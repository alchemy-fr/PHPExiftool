<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraColorCalibration12 extends AbstractTagGroup
{

  protected string $id = 'Canon:CameraColorCalibration12';

  protected string $name = 'CameraColorCalibration12';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Color Calibration 12',
  ];

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCalib
       * line : 59011
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCalib.Canon:CameraColorCalibration12',
      'desc' => [
        'en' => 'Camera Color Calibration 12',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCalib2
       * line : 59120
       * type : int16s
       * writable : true
       * count : 5
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorCalib2.Canon:CameraColorCalibration12',
      'desc' => [
        'en' => 'Camera Color Calibration 12',
      ],
    ],
  ];

}
