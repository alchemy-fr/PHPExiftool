<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawThermalImage extends AbstractTagGroup
{

  protected string $id = 'Parrot:RawThermalImage';

  protected string $name = 'RawThermalImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Thermal Image',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 152905
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'JPEG::Main.Parrot:RawThermalImage',
      'desc' => [
        'en' => 'Raw Thermal Image',
      ],
    ],
  ];

}
