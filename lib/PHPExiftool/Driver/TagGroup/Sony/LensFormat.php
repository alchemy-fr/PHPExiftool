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
class LensFormat extends AbstractTagGroup
{

  protected string $id = 'Sony:LensFormat';

  protected string $name = 'LensFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Format',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367298
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371329
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374330
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377331
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379661
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 382029
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 385957
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405a.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388599
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391660
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:LensFormat',
      'desc' => [
        'en' => 'Lens Format',
      ],
    ],
  ];

}
