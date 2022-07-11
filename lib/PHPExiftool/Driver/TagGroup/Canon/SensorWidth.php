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
class SensorWidth extends AbstractTagGroup
{

  protected string $id = 'Canon:SensorWidth';

  protected string $name = 'SensorWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sensor Width',
    'fr' => 'Largeur du capteur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::SensorInfo
       * line : 70055
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::SensorInfo.Canon:SensorWidth',
      'desc' => [
        'en' => 'Sensor Width',
        'fr' => 'Largeur du capteur',
      ],
    ],
  ];

}
