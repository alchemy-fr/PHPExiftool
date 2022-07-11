<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevels extends AbstractTagGroup
{

  protected string $id = 'Sony:WB_RGBLevels';

  protected string $name = 'WB_RGBLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels',
    'fr' => 'Niveaux BB RVB',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 363234
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 364232
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 365255
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 366221
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367240
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 370247
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371277
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374278
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377279
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
  ];

}
