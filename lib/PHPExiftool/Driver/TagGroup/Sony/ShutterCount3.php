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
class ShutterCount3 extends AbstractTagGroup
{

  protected string $id = 'Sony:ShutterCount3';

  protected string $name = 'ShutterCount3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter Count 3',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381620
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:ShutterCount3',
      'desc' => [
        'en' => 'Shutter Count 3',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381623
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:ShutterCount3',
      'desc' => [
        'en' => 'Shutter Count 3',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381626
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:ShutterCount3',
      'desc' => [
        'en' => 'Shutter Count 3',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383985
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ShutterCount3',
      'desc' => [
        'en' => 'Shutter Count 3',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383988
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ShutterCount3',
      'desc' => [
        'en' => 'Shutter Count 3',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383991
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ShutterCount3',
      'desc' => [
        'en' => 'Shutter Count 3',
      ],
    ],
  ];

}
