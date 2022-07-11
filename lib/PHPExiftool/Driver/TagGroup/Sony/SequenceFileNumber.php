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
class SequenceFileNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:SequenceFileNumber';

  protected string $name = 'SequenceFileNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sequence File Number',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363248
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364253
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365272
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366238
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384294
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400a.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384527
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400b.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384884
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400c.Sony:SequenceFileNumber',
      'desc' => [
        'en' => 'Sequence File Number',
      ],
    ],
  ];

}
