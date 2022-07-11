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
class CameraTemperature extends AbstractTagGroup
{

  protected string $id = 'Canon:CameraTemperature';

  protected string $name = 'CameraTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Temperature',
    'fr' => 'Température de l\'appareil',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4562
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9165
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13581
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 17944
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 19965
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 21999
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24051
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26353
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28652
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32277
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35054
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37305
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39514
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41650
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43403
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45561
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47696
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49396
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51596
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53685
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfoPowerShot
       * line : 55397
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfoPowerShot
       * line : 55408
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55486
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    23 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55497
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    24 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55508
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    25 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55519
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    26 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55530
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    27 => [
      /**
       * table_name : Canon::CameraInfoUnknown32
       * line : 55571
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    28 => [
      /**
       * table_name : Canon::CameraInfoUnknown32
       * line : 55582
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    29 => [
      /**
       * table_name : Canon::CameraInfoUnknown32
       * line : 55593
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    30 => [
      /**
       * table_name : Canon::CameraInfoUnknown32
       * line : 55604
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    31 => [
      /**
       * table_name : Canon::CameraInfoUnknown32
       * line : 55615
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    32 => [
      /**
       * table_name : Canon::CameraInfoUnknown32
       * line : 55626
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    33 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70540
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
  ];

}
