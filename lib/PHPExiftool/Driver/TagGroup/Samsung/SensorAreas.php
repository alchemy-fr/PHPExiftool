<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorAreas extends AbstractTagGroup
{

  protected string $id = 'Samsung:SensorAreas';

  protected string $name = 'SensorAreas';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensor Areas',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335751
       * type : int32u
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:SensorAreas',
      'desc' => [
        'en' => 'Sensor Areas',
      ],
    ],
  ];

}
