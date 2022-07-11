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
class LensFStops extends AbstractTagGroup
{

  protected string $id = 'Nikon:LensFStops';

  protected string $name = 'LensFStops';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens F Stops',
    'fr' => 'Nombre de diaphs de l\'objectif',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195902
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:LensFStops',
      'desc' => [
        'en' => 'Lens F Stops',
        'fr' => 'Nombre de diaphs de l\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196034
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:LensFStops',
      'desc' => [
        'en' => 'Lens F Stops',
        'fr' => 'Nombre de diaphs de l\'objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196175
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:LensFStops',
      'desc' => [
        'en' => 'Lens F Stops',
        'fr' => 'Nombre de diaphs de l\'objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196382
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:LensFStops',
      'desc' => [
        'en' => 'Lens F Stops',
        'fr' => 'Nombre de diaphs de l\'objectif',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::Main
       * line : 197684
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:LensFStops',
      'desc' => [
        'en' => 'Lens F Stops',
        'fr' => 'Nombre de diaphs de l\'objectif',
      ],
    ],
  ];

}
