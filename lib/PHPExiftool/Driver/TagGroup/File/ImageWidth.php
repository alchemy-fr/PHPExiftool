<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{

  protected string $id = 'File:ImageWidth';

  protected string $name = 'ImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Width',
    'fr' => 'Largeur d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3200
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : BMP::OS2
       * line : 3496
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::OS2.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : BPG::Main
       * line : 3692
       * type : var_ue7
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BPG::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : DPX::Main
       * line : 105882
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    4 => [
      /**
       * table_name : Extra
       * line : 121769
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    5 => [
      /**
       * table_name : FLIF::Main
       * line : 122416
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIF::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    6 => [
      /**
       * table_name : JPEG::SOF
       * line : 153334
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SOF.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    7 => [
      /**
       * table_name : MRC::Main
       * line : 167147
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    8 => [
      /**
       * table_name : Other::PFM
       * line : 264156
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Other::PFM.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    9 => [
      /**
       * table_name : PCX::Main
       * line : 264247
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    10 => [
      /**
       * table_name : PGF::Main
       * line : 264812
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
  ];

}
