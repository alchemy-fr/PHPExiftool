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
class LensType2 extends AbstractTagGroup
{

  protected string $id = 'Sony:LensType2';

  protected string $name = 'LensType2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Type 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351798
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367326
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371357
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374358
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377359
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379675
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 382043
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 385985
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405a.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388627
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391688
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:LensType2',
      'desc' => [
        'en' => 'Lens Type 2',
      ],
    ],
  ];

}
