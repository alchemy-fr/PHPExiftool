<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BodyBatteryState extends AbstractTagGroup
{

  protected string $id = 'Pentax:BodyBatteryState';

  protected string $name = 'BodyBatteryState';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Body Battery State',
    'fr' => 'État de accu boîtier',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 284090
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryState',
      'desc' => [
        'en' => 'Body Battery State',
        'fr' => 'État de accu boîtier',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 284118
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryState',
      'desc' => [
        'en' => 'Body Battery State',
        'fr' => 'État de accu boîtier',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 284149
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryState',
      'desc' => [
        'en' => 'Body Battery State',
        'fr' => 'État de accu boîtier',
      ],
    ],
  ];

}
