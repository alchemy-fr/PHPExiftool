<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorLeftBorder extends AbstractTagGroup
{

  protected string $id = 'IFD0:SensorLeftBorder';

  protected string $name = 'SensorLeftBorder';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sensor Left Border',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280586
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::Main.IFD0:SensorLeftBorder',
      'desc' => [
        'en' => 'Sensor Left Border',
      ],
    ],
  ];

}
