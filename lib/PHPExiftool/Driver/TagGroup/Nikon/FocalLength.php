<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLength extends AbstractTagGroup
{

  protected string $id = 'Nikon:FocalLength';

  protected string $name = 'FocalLength';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Length',
    'fr' => 'Focale de l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191922
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196007
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196148
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196355
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196561
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::MOV
       * line : 196872
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MOV.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203008
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
  ];

}
