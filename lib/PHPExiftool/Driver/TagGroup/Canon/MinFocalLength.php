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
class MinFocalLength extends AbstractTagGroup
{

  protected string $id = 'Canon:MinFocalLength';

  protected string $name = 'MinFocalLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Min Focal Length',
    'fr' => 'Focale mini',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 6460
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8042
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 11202
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 12775
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 15622
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17222
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 19838
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 21863
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 26196
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 28498
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 30689
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32895
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 37203
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 39342
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 41551
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 43304
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 45440
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 47598
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 49298
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 51433
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 53587
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 55287
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraSettings
       * line : 58458
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraSettings.Canon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
  ];

}
