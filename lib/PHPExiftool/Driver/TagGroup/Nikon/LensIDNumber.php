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
class LensIDNumber extends AbstractTagGroup
{

  protected string $id = 'Nikon:LensIDNumber';

  protected string $name = 'LensIDNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens ID Number',
    'fr' => 'Numéro d\'Objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195893
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:LensIDNumber',
      'desc' => [
        'en' => 'Lens ID Number',
        'fr' => 'Numéro d\'Objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196025
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:LensIDNumber',
      'desc' => [
        'en' => 'Lens ID Number',
        'fr' => 'Numéro d\'Objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196166
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:LensIDNumber',
      'desc' => [
        'en' => 'Lens ID Number',
        'fr' => 'Numéro d\'Objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196373
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:LensIDNumber',
      'desc' => [
        'en' => 'Lens ID Number',
        'fr' => 'Numéro d\'Objectif',
      ],
    ],
  ];

}
