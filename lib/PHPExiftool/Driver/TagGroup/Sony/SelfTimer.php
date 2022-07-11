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
class SelfTimer extends AbstractTagGroup
{

  protected string $id = 'Sony:SelfTimer';

  protected string $name = 'SelfTimer';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Self Timer',
    'fr' => 'Retardateur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362494
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363492
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364515
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365516
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366500
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369507
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370537
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373538
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376539
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:SelfTimer',
      'desc' => [
        'en' => 'Self Timer',
        'fr' => 'Retardateur',
      ],
    ],
  ];

}
