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
class FirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:FirmwareVersion';

  protected string $name = 'FirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware Version',
    'fr' => 'Version de firmware',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MakerNotes0x51
       * line : 199986
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::MakerNotes0x51.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205647
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD300S
       * line : 205857
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300S.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD300b
       * line : 206056
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD300b.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD3S
       * line : 206357
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3S.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoD3X
       * line : 206413
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3X.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206536
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::ShotInfoD4
       * line : 206658
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 206735
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207365
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    10 => [
      /**
       * table_name : Nikon::ShotInfoD5000
       * line : 208131
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5000.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    11 => [
      /**
       * table_name : Nikon::ShotInfoD5100
       * line : 208170
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5100.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    12 => [
      /**
       * table_name : Nikon::ShotInfoD5200
       * line : 208204
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD5200.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    13 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208238
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    14 => [
      /**
       * table_name : Nikon::ShotInfoD610
       * line : 208598
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD610.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    15 => [
      /**
       * table_name : Nikon::ShotInfoD700
       * line : 208621
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD700.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    16 => [
      /**
       * table_name : Nikon::ShotInfoD7000
       * line : 208660
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD7000.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    17 => [
      /**
       * table_name : Nikon::ShotInfoD800
       * line : 208881
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD800.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    18 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 208945
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    19 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209505
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    20 => [
      /**
       * table_name : Nikon::ShotInfoD90
       * line : 209597
       * type : string
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD90.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    21 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209636
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    22 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209719
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
  ];

}
