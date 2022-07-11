<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraCalibration extends AbstractTagGroup
{

  protected string $id = 'Sigma:CameraCalibration';

  protected string $name = 'CameraCalibration';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Calibration',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 339560
       * type : float
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:CameraCalibration',
      'desc' => [
        'en' => 'Camera Calibration',
      ],
    ],
  ];

}
