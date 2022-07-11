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
class Shutter extends AbstractTagGroup
{

  protected string $id = 'Sony:Shutter';

  protected string $name = 'Shutter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379417
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:Shutter',
      'desc' => [
        'en' => 'Shutter',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381639
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:Shutter',
      'desc' => [
        'en' => 'Shutter',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384054
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:Shutter',
      'desc' => [
        'en' => 'Shutter',
      ],
    ],
  ];

}
