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
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'File:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Height',
    'fr' => 'Hauteur d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3218
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : BMP::OS2
       * line : 3514
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::OS2.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : BPG::Main
       * line : 3710
       * type : var_ue7
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BPG::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : DPX::Main
       * line : 105900
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    4 => [
      /**
       * table_name : Extra
       * line : 121751
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    5 => [
      /**
       * table_name : FLIF::Main
       * line : 122434
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIF::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    6 => [
      /**
       * table_name : JPEG::SOF
       * line : 153316
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SOF.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    7 => [
      /**
       * table_name : MRC::Main
       * line : 167165
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    8 => [
      /**
       * table_name : Other::PFM
       * line : 264138
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Other::PFM.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    9 => [
      /**
       * table_name : PCX::Main
       * line : 264265
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    10 => [
      /**
       * table_name : PGF::Main
       * line : 264830
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
  ];

}
