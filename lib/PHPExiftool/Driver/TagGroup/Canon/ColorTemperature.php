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
class ColorTemperature extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTemperature';

  protected string $name = 'ColorTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temperature',
    'fr' => 'Température de couleur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4951
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8470
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8943
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9550
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 13106
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13970
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17534
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 18329
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 20354
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 22388
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24436
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26738
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 29037
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32732
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35443
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37690
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39899
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41795
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43788
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45946
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47789
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49781
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51981
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    23 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53778
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    24 => [
      /**
       * table_name : Canon::Main
       * line : 65917
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    25 => [
      /**
       * table_name : Canon::Processing
       * line : 69859
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Processing.Canon:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
  ];

}
