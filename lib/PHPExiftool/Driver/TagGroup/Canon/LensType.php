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
class LensType extends AbstractTagGroup
{

  protected string $id = 'Canon:LensType';

  protected string $name = 'LensType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Type',
    'fr' => 'Sorte d\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1000D
       * line : 4971
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1000D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 6553
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9713
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 11286
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 14133
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 15733
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 18349
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo40D
       * line : 20374
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo40D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 22408
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24707
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 27009
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 29200
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 30788
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32915
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35714
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37853
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 40062
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    17 => [
      /**
       * table_name : Canon::CameraInfo60D
       * line : 41815
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo60D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    18 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43951
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    19 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 46109
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    20 => [
      /**
       * table_name : Canon::CameraInfo70D
       * line : 47809
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo70D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    21 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49944
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    22 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 52098
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    23 => [
      /**
       * table_name : Canon::CameraInfo80D
       * line : 53798
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo80D.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    24 => [
      /**
       * table_name : Canon::CameraSettings
       * line : 56959
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraSettings.Canon:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
  ];

}
