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
class FlashFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:FlashFirmwareVersion';

  protected string $name = 'FlashFirmwareVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Firmware Version',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 255006
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:FlashFirmwareVersion',
      'desc' => [
        'en' => 'Flash Firmware Version',
      ],
    ],
  ];

}
