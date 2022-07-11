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
class LensDataVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:LensDataVersion';

  protected string $name = 'LensDataVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Data Version',
    'fr' => 'Version des Données Objectif',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195885
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 195963
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196104
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0400
       * line : 196245
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0400.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::LensData0402
       * line : 196266
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0402.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::LensData0403
       * line : 196287
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0403.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196308
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::LensDataUnknown
       * line : 196593
       * type : string
       * writable : false
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::LensDataUnknown.Nikon:LensDataVersion',
      'desc' => [
        'en' => 'Lens Data Version',
        'fr' => 'Version des Données Objectif',
      ],
    ],
  ];

}
