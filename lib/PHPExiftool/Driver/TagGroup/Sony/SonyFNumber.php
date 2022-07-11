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
class SonyFNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyFNumber';

  protected string $name = 'SonyFNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony F Number',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379474
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:SonyFNumber',
      'desc' => [
        'en' => 'Sony F Number',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381696
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:SonyFNumber',
      'desc' => [
        'en' => 'Sony F Number',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384111
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:SonyFNumber',
      'desc' => [
        'en' => 'Sony F Number',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384194
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:SonyFNumber',
      'desc' => [
        'en' => 'Sony F Number',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387951
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SonyFNumber',
      'desc' => [
        'en' => 'Sony F Number',
      ],
    ],
  ];

}
