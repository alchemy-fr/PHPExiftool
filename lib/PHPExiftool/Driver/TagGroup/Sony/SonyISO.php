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
class SonyISO extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyISO';

  protected string $name = 'SonyISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 364239
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 365262
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 366228
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367247
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367250
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367291
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 370292
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371322
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374323
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377324
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387918
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391377
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:SonyISO',
      'desc' => [
        'en' => 'Sony ISO',
      ],
    ],
  ];

}
