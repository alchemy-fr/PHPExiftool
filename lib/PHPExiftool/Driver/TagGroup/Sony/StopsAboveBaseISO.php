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
class StopsAboveBaseISO extends AbstractTagGroup
{

  protected string $id = 'Sony:StopsAboveBaseISO';

  protected string $name = 'StopsAboveBaseISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Stops Above Base ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362558
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363556
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364579
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365580
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366564
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369571
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370601
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373602
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376603
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387927
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391380
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:StopsAboveBaseISO',
      'desc' => [
        'en' => 'Stops Above Base ISO',
      ],
    ],
  ];

}
