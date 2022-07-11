<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryTemperature extends AbstractTagGroup
{

  protected string $id = 'GoPro:BatteryTemperature';

  protected string $name = 'BatteryTemperature';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Battery Temperature',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::KBAT
       * line : 140339
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::KBAT.GoPro:BatteryTemperature',
      'desc' => [
        'en' => 'Battery Temperature',
      ],
    ],
  ];

}
