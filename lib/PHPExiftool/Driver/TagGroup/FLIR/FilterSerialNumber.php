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
class FilterSerialNumber extends AbstractTagGroup
{

  protected string $id = 'FLIR:FilterSerialNumber';

  protected string $name = 'FilterSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Filter Serial Number',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CameraInfo
       * line : 122653
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::CameraInfo.FLIR:FilterSerialNumber',
      'desc' => [
        'en' => 'Filter Serial Number',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::FPF
       * line : 122927
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:FilterSerialNumber',
      'desc' => [
        'en' => 'Filter Serial Number',
      ],
    ],
  ];

}
