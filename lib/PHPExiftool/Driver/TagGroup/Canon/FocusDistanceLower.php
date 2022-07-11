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
class FocusDistanceLower extends AbstractTagGroup
{

  protected string $id = 'Canon:FocusDistanceLower';

  protected string $name = 'FocusDistanceLower';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Distance Lower',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4653
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9252
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13672
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 18031
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 20056
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 22090
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24138
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26440
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28739
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35145
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37392
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39601
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41789
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43490
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45648
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47783
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49483
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51683
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53772
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63800
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::FileInfo.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70724
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:FocusDistanceLower',
      'desc' => [
        'en' => 'Focus Distance Lower',
      ],
    ],
  ];

}
