<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Camera;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorSize extends AbstractTagGroup
{

  protected string $id = 'MIE-Camera:SensorSize';

  protected string $name = 'SensorSize';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensor Size',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Camera
       * line : 163435
       * type : rational64u
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'MIE::Camera.MIE-Camera:SensorSize',
      'desc' => [
        'en' => 'Sensor Size',
      ],
    ],
  ];

}
