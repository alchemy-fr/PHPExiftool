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
class PictureStyle extends AbstractTagGroup
{

  protected string $id = 'Canon:PictureStyle';

  protected string $name = 'PictureStyle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Style',
    'fr' => 'Style d\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8800
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8963
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9570
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 13255
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 13990
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17554
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24456
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26758
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 29057
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 32752
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35463
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37710
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39919
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::CameraInfo650D
       * line : 43808
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo650D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    14 => [
      /**
       * table_name : Canon::CameraInfo6D
       * line : 45966
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo6D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    15 => [
      /**
       * table_name : Canon::CameraInfo750D
       * line : 49801
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo750D.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
    16 => [
      /**
       * table_name : Canon::Processing
       * line : 69879
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Processing.Canon:PictureStyle',
      'desc' => [
        'en' => 'Picture Style',
        'fr' => 'Style d\'image',
      ],
    ],
  ];

}
