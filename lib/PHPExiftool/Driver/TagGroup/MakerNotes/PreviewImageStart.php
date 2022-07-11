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
class PreviewImageStart extends AbstractTagGroup
{

  protected string $id = 'MakerNotes:PreviewImageStart';

  protected string $name = 'PreviewImageStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Start',
    'fr' => 'Début d\'image miniature',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PreviewImageInfo
       * line : 69432
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Canon::PreviewImageInfo.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    1 => [
      /**
       * table_name : Casio::Type2
       * line : 85261
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Casio::Type2.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    2 => [
      /**
       * table_name : Exif::Main
       * line : 112653
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Exif::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183137
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Minolta::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::PreviewIFD
       * line : 205452
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Nikon::PreviewIFD.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    5 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 250741
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Olympus::CameraSettings.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    6 => [
      /**
       * table_name : Olympus::Main
       * line : 259444
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Olympus::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    7 => [
      /**
       * table_name : Pentax::Main
       * line : 295123
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Pentax::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    8 => [
      /**
       * table_name : Ricoh::ImageInfo
       * line : 332283
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Ricoh::ImageInfo.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    9 => [
      /**
       * table_name : Samsung::Main
       * line : 334381
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Samsung::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    10 => [
      /**
       * table_name : Sigma::Main
       * line : 337786
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Sigma::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    11 => [
      /**
       * table_name : Sigma::Main
       * line : 337825
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Sigma::Main.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    12 => [
      /**
       * table_name : Sony::Ericsson
       * line : 352427
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Sony::Ericsson.MakerNotes:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
  ];

}
