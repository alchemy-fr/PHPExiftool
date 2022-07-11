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
class SensorHeight extends AbstractTagGroup
{

  protected string $id = 'Canon:SensorHeight';

  protected string $name = 'SensorHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sensor Height',
    'fr' => 'Hauteur du capteur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::SensorInfo
       * line : 70064
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::SensorInfo.Canon:SensorHeight',
      'desc' => [
        'en' => 'Sensor Height',
        'fr' => 'Hauteur du capteur',
      ],
    ],
  ];

}
