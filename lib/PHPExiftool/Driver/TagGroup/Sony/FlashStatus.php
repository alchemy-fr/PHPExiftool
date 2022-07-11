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
class FlashStatus extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashStatus';

  protected string $name = 'FlashStatus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Status',
    'fr' => 'Segment de mesure flash esclave 1',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361509
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashStatus',
      'desc' => [
        'en' => 'Flash Status',
        'fr' => 'Segment de mesure flash esclave 1',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361526
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashStatus',
      'desc' => [
        'en' => 'Flash Status',
        'fr' => 'Segment de mesure flash esclave 1',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379425
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:FlashStatus',
      'desc' => [
        'en' => 'Flash Status',
        'fr' => 'Segment de mesure flash esclave 1',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381647
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:FlashStatus',
      'desc' => [
        'en' => 'Flash Status',
        'fr' => 'Segment de mesure flash esclave 1',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050c
       * line : 384062
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050c.Sony:FlashStatus',
      'desc' => [
        'en' => 'Flash Status',
        'fr' => 'Segment de mesure flash esclave 1',
      ],
    ],
  ];

}
