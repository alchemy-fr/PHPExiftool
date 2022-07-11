<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashFirmware extends AbstractTagGroup
{

  protected string $id = 'Nikon:ExternalFlashFirmware';

  protected string $name = 'ExternalFlashFirmware';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'External Flash Firmware',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192714
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:ExternalFlashFirmware',
      'desc' => [
        'en' => 'External Flash Firmware',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193221
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:ExternalFlashFirmware',
      'desc' => [
        'en' => 'External Flash Firmware',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193793
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:ExternalFlashFirmware',
      'desc' => [
        'en' => 'External Flash Firmware',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194417
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:ExternalFlashFirmware',
      'desc' => [
        'en' => 'External Flash Firmware',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195029
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:ExternalFlashFirmware',
      'desc' => [
        'en' => 'External Flash Firmware',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::FlashInfo0300
       * line : 195516
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0300.Nikon:ExternalFlashFirmware',
      'desc' => [
        'en' => 'External Flash Firmware',
      ],
    ],
  ];

}
