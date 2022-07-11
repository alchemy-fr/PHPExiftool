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
class RawMeasuredRGGB extends AbstractTagGroup
{

  protected string $id = 'Canon:RawMeasuredRGGB';

  protected string $name = 'RawMeasuredRGGB';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Measured RGGB',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData2
       * line : 61067
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:RawMeasuredRGGB',
      'desc' => [
        'en' => 'Raw Measured RGGB',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData4
       * line : 61320
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData4.Canon:RawMeasuredRGGB',
      'desc' => [
        'en' => 'Raw Measured RGGB',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61704
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:RawMeasuredRGGB',
      'desc' => [
        'en' => 'Raw Measured RGGB',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62092
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:RawMeasuredRGGB',
      'desc' => [
        'en' => 'Raw Measured RGGB',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData7
       * line : 62108
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:RawMeasuredRGGB',
      'desc' => [
        'en' => 'Raw Measured RGGB',
      ],
    ],
  ];

}
