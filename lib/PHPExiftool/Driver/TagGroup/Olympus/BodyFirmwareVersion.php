<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BodyFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:BodyFirmwareVersion';

  protected string $name = 'BodyFirmwareVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Body Firmware Version',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 254353
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:BodyFirmwareVersion',
      'desc' => [
        'en' => 'Body Firmware Version',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::FETags
       * line : 255025
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::FETags.Olympus:BodyFirmwareVersion',
      'desc' => [
        'en' => 'Body Firmware Version',
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::Main
       * line : 257234
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:BodyFirmwareVersion',
      'desc' => [
        'en' => 'Body Firmware Version',
      ],
    ],
  ];

}
