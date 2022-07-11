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
class IRWindowTemperature extends AbstractTagGroup
{

  protected string $id = 'FLIR:IRWindowTemperature';

  protected string $name = 'IRWindowTemperature';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'IR Window Temperature',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122541
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:IRWindowTemperature',
      'desc' => [
        'en' => 'IR Window Temperature',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122957
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:IRWindowTemperature',
      'desc' => [
        'en' => 'IR Window Temperature',
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::Params
       * line : 123935
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Params.FLIR:IRWindowTemperature',
      'desc' => [
        'en' => 'IR Window Temperature',
      ],
    ],
  ];

}
