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
class BatteryVoltage extends AbstractTagGroup
{

  protected string $id = 'Sony:BatteryVoltage';

  protected string $name = 'BatteryVoltage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Battery Voltage',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ExtraInfo
       * line : 352471
       * type : undef
       * writable : false
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Sony::ExtraInfo.Sony:BatteryVoltage',
      'desc' => [
        'en' => 'Battery Voltage',
      ],
    ],
  ];

}
