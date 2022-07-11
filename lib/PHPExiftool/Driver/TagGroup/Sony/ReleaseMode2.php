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
class ReleaseMode2 extends AbstractTagGroup
{

  protected string $id = 'Sony:ReleaseMode2';

  protected string $name = 'ReleaseMode2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Release Mode 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362420
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363251
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363418
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364256
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364441
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365275
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365442
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366241
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366426
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369269
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369433
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370299
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    12 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370463
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    13 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373300
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    14 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373464
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    15 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376301
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    16 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376465
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    17 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379477
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    18 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379557
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    19 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381699
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    20 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381785
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    21 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381859
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    22 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381933
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    23 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384114
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    24 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384197
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    25 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384297
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400a.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    26 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384530
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    27 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384757
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400c.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
    28 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387960
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:ReleaseMode2',
      'desc' => [
        'en' => 'Release Mode 2',
      ],
    ],
  ];

}
