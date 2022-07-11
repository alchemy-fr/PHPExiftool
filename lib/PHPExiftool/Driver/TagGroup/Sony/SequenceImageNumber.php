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
class SequenceImageNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:SequenceImageNumber';

  protected string $name = 'SequenceImageNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sequence Image Number',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363245
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364250
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365269
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366235
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384291
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400a.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384524
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400b.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384834
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400c.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387957
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391410
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:SequenceImageNumber',
      'desc' => [
        'en' => 'Sequence Image Number',
      ],
    ],
  ];

}
