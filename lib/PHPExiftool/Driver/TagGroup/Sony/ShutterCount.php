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
class ShutterCount extends AbstractTagGroup
{

  protected string $id = 'Sony:ShutterCount';

  protected string $name = 'ShutterCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter Count',
    'fr' => 'Comptage des déclenchements',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353761
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreInfo0201
       * line : 360111
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreInfo0201.Sony:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::MoreInfo0201
       * line : 360122
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreInfo0201.Sony:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379460
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381682
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384097
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
  ];

}
