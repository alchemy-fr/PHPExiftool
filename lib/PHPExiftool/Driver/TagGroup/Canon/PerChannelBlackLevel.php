<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PerChannelBlackLevel extends AbstractTagGroup
{

  protected string $id = 'Canon:PerChannelBlackLevel';

  protected string $name = 'PerChannelBlackLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Per Channel Black Level',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60280
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60725
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61258
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61324
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61336
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61342
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData5
       * line : 61378
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData5.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData5
       * line : 61381
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData5.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61708
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62096
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62112
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62582
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    12 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62594
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
    13 => [
      /**
       * table_name : Canon::ColorData9
       * line : 63053
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:PerChannelBlackLevel',
      'desc' => [
        'en' => 'Per Channel Black Level',
      ],
    ],
  ];

}
