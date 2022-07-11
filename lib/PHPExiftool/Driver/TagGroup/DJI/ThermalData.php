<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThermalData extends AbstractTagGroup
{

  protected string $id = 'DJI:ThermalData';

  protected string $name = 'ThermalData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thermal Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 152921
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'JPEG::Main.DJI:ThermalData',
      'desc' => [
        'en' => 'Thermal Data',
      ],
    ],
  ];

}
