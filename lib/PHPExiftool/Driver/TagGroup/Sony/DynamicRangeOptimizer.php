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
class DynamicRangeOptimizer extends AbstractTagGroup
{

  protected string $id = 'Sony:DynamicRangeOptimizer';

  protected string $name = 'DynamicRangeOptimizer';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Dynamic Range Optimizer',
    'fr' => 'Optimiseur Dyna',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 357179
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Main
       * line : 359703
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362576
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363328
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363574
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364351
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364597
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365352
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365598
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366336
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366582
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369343
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    12 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369589
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    13 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370373
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    14 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370619
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    15 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373374
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    16 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373620
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    17 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376375
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
    18 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376621
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:DynamicRangeOptimizer',
      'desc' => [
        'en' => 'Dynamic Range Optimizer',
        'fr' => 'Optimiseur Dyna',
      ],
    ],
  ];

}
