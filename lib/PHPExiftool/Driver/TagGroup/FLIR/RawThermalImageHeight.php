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
class RawThermalImageHeight extends AbstractTagGroup
{

  protected string $id = 'FLIR:RawThermalImageHeight';

  protected string $name = 'RawThermalImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Thermal Image Height',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::RawData
       * line : 124026
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::RawData.FLIR:RawThermalImageHeight',
      'desc' => [
        'en' => 'Raw Thermal Image Height',
      ],
    ],
  ];

}
