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
class LensMount extends AbstractTagGroup
{

  protected string $id = 'Sony:LensMount';

  protected string $name = 'LensMount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Mount',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351573
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367312
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371343
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374344
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377345
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379647
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 382015
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 385971
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405a.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388613
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391643
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391674
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:LensMount',
      'desc' => [
        'en' => 'Lens Mount',
      ],
    ],
  ];

}
