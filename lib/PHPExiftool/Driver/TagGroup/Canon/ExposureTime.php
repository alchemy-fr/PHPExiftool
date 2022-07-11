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
class ExposureTime extends AbstractTagGroup
{

  protected string $id = 'Canon:ExposureTime';

  protected string $name = 'ExposureTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Time',
    'fr' => 'Temps de pose',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4501
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 6517
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9132
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 11250
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13548
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 15697
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 17850
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 19904
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 21938
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 23963
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26265
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28564
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 30755
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 34966
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37272
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39426
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41617
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43370
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45528
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47663
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49363
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51499
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53652
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    23 => [
      /**
       * table_name : Canon::CameraInfoPowerShot
       * line : 55368
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    24 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55457
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    25 => [
      /**
       * table_name : Canon::ExposureInfo
       * line : 63235
       * type : rational32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ExposureInfo.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    26 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70748
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    27 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70766
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
  ];

}
