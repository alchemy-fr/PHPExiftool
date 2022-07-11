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
class Emissivity extends AbstractTagGroup
{

  protected string $id = 'FLIR:Emissivity';

  protected string $name = 'Emissivity';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Emissivity',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122526
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:Emissivity',
      'desc' => [
        'en' => 'Emissivity',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122930
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:Emissivity',
      'desc' => [
        'en' => 'Emissivity',
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::Main
       * line : 123559
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Main.FLIR:Emissivity',
      'desc' => [
        'en' => 'Emissivity',
      ],
    ],
    3 => [
      /**
       * table_name : FLIR::Params
       * line : 123920
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Params.FLIR:Emissivity',
      'desc' => [
        'en' => 'Emissivity',
      ],
    ],
  ];

}
