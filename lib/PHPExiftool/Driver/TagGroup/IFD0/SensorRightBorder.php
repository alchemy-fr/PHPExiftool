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
class SensorRightBorder extends AbstractTagGroup
{

  protected string $id = 'IFD0:SensorRightBorder';

  protected string $name = 'SensorRightBorder';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sensor Right Border',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280600
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::Main.IFD0:SensorRightBorder',
      'desc' => [
        'en' => 'Sensor Right Border',
      ],
    ],
  ];

}
