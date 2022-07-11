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
class ObjectDistance extends AbstractTagGroup
{

  protected string $id = 'FLIR:ObjectDistance';

  protected string $name = 'ObjectDistance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Object Distance',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122529
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:ObjectDistance',
      'desc' => [
        'en' => 'Object Distance',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122933
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:ObjectDistance',
      'desc' => [
        'en' => 'Object Distance',
      ],
    ],
    2 => [
      /**
       * table_name : FLIR::Params
       * line : 123923
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Params.FLIR:ObjectDistance',
      'desc' => [
        'en' => 'Object Distance',
      ],
    ],
  ];

}
