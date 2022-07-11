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
class DirectoryIndex extends AbstractTagGroup
{

  protected string $id = 'Canon:DirectoryIndex';

  protected string $name = 'DirectoryIndex';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Directory Index',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 6490
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 11239
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 15670
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 19875
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 21900
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 23918
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 26233
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 28535
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 30726
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34416
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 37240
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 39394
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 41588
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 43341
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 45494
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 45500
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 47635
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 49335
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 53624
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 55324
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:DirectoryIndex',
      'desc' => [
        'en' => 'Directory Index',
      ],
    ],
  ];

}
