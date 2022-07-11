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
class PictureEffect2 extends AbstractTagGroup
{

  protected string $id = 'Sony:PictureEffect2';

  protected string $name = 'PictureEffect2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Effect 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362843
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363841
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364864
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365847
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366849
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369856
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370886
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373887
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376888
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388164
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:PictureEffect2',
      'desc' => [
        'en' => 'Picture Effect 2',
      ],
    ],
  ];

}
