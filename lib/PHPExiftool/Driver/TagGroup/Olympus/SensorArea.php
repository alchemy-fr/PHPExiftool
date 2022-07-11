<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorArea extends AbstractTagGroup
{

  protected string $id = 'Olympus:SensorArea';

  protected string $name = 'SensorArea';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensor Area',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Main
       * line : 258347
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:SensorArea',
      'desc' => [
        'en' => 'Sensor Area',
      ],
    ],
  ];

}
