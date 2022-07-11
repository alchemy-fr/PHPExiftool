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
class CameraPartNumber extends AbstractTagGroup
{

  protected string $id = 'FLIR:CameraPartNumber';

  protected string $name = 'CameraPartNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Part Number',
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122604
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:CameraPartNumber',
      'desc' => [
        'en' => 'Camera Part Number',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122879
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:CameraPartNumber',
      'desc' => [
        'en' => 'Camera Part Number',
      ],
    ],
  ];

}
