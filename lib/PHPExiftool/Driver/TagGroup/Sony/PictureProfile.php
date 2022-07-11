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
class PictureProfile extends AbstractTagGroup
{

  protected string $id = 'Sony:PictureProfile';

  protected string $name = 'PictureProfile';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Profile',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362689
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362766
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363687
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363764
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364710
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364787
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365693
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365770
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366695
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366772
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369702
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369779
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    12 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370732
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    13 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370809
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    14 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373733
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    15 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373810
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    16 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376734
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    17 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376811
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
    18 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393609
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:PictureProfile',
      'desc' => [
        'en' => 'Picture Profile',
      ],
    ],
  ];

}
