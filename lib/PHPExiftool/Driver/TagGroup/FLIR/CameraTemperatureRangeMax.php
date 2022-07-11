<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTemperatureRangeMax extends AbstractTagGroup
{

  protected string $id = 'FLIR:CameraTemperatureRangeMax';

  protected string $name = 'CameraTemperatureRangeMax';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Temperature Range Max',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122574
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:CameraTemperatureRangeMax',
      'desc' => [
        'en' => 'Camera Temperature Range Max',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122895
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:CameraTemperatureRangeMax',
      'desc' => [
        'en' => 'Camera Temperature Range Max',
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::Main
       * line : 123565
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'FLIR::Main.FLIR:CameraTemperatureRangeMax',
      'desc' => [
        'en' => 'Camera Temperature Range Max',
      ],
    ],
  ];

}
