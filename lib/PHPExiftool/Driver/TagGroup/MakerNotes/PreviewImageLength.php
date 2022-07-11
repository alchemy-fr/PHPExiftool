<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MakerNotes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageLength extends AbstractTagGroup
{

  protected string $id = 'MakerNotes:PreviewImageLength';

  protected string $name = 'PreviewImageLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Length',
    'fr' => 'Longueur d\'image miniature',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PreviewImageInfo
       * line : 69411
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Canon::PreviewImageInfo.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    1 => [
      /**
       * table_name : Casio::Type2
       * line : 85250
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Casio::Type2.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    2 => [
      /**
       * table_name : Exif::Main
       * line : 112726
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Exif::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183148
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Minolta::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::PreviewIFD
       * line : 205463
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Nikon::PreviewIFD.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    5 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 250752
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Olympus::CameraSettings.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    6 => [
      /**
       * table_name : Olympus::Main
       * line : 259455
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Olympus::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    7 => [
      /**
       * table_name : Pentax::Main
       * line : 295112
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Pentax::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    8 => [
      /**
       * table_name : QuickTime::Flip
       * line : 313407
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Flip.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    9 => [
      /**
       * table_name : Ricoh::ImageInfo
       * line : 332294
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Ricoh::ImageInfo.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    10 => [
      /**
       * table_name : Samsung::Main
       * line : 334392
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Samsung::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    11 => [
      /**
       * table_name : Sigma::Main
       * line : 337800
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Sigma::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    12 => [
      /**
       * table_name : Sigma::Main
       * line : 337847
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Sigma::Main.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
    13 => [
      /**
       * table_name : Sony::Ericsson
       * line : 352438
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Sony::Ericsson.MakerNotes:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
  ];

}
