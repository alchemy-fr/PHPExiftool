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
class RawThermalImage extends AbstractTagGroup
{

  protected string $id = 'FLIR:RawThermalImage';

  protected string $name = 'RawThermalImage';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Thermal Image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::RawData
       * line : 124032
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::RawData.FLIR:RawThermalImage',
      'desc' => [
        'en' => 'Raw Thermal Image',
      ],
    ],
  ];

}
