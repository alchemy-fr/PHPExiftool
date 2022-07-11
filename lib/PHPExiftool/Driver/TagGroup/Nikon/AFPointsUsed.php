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
class AFPointsUsed extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFPointsUsed';

  protected string $name = 'AFPointsUsed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points Used',
    'fr' => 'Points AF utilisés',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190114
       * type : undef
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190123
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190213
       * type : undef
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190222
       * type : undef
       * writable : true
       * count : 17
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190231
       * type : undef
       * writable : true
       * count : 21
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190240
       * type : undef
       * writable : true
       * count : 29
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190249
       * type : undef
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190258
       * type : undef
       * writable : true
       * count : 13
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190267
       * type : undef
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    9 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190276
       * type : undef
       * writable : true
       * count : 14
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
  ];

}
