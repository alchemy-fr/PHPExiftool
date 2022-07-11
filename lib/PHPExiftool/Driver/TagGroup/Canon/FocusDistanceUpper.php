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
class FocusDistanceUpper extends AbstractTagGroup
{

  protected string $id = 'Canon:FocusDistanceUpper';

  protected string $name = 'FocusDistanceUpper';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Distance Upper',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4647
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9246
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13666
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 18025
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 20050
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 22084
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24132
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26434
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28733
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35139
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37386
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39595
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41783
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43484
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45642
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47777
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49477
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51677
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53766
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63794
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::FileInfo.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70718
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:FocusDistanceUpper',
      'desc' => [
        'en' => 'Focus Distance Upper',
      ],
    ],
  ];

}
