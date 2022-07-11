<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Canon:FirmwareVersion';

  protected string $name = 'FirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware Version',
    'fr' => 'Version de firmware',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 6480
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 11222
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 15642
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 19858
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 21883
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 23897
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 26216
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 28518
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 30709
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 37223
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 39373
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 41571
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 43324
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 45460
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 45470
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 47618
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 49318
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 51453
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 51463
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 53607
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 55307
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfoUnknown
       * line : 55556
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown.Canon:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
  ];

}
