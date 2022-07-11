<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensorHeight extends AbstractTagGroup
{

  protected string $id = 'FLIR:SensorHeight';

  protected string $name = 'SensorHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sensor Height',
    'fr' => 'Hauteur du capteur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::AFF1
       * line : 122483
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::AFF1.FLIR:SensorHeight',
      'desc' => [
        'en' => 'Sensor Height',
        'fr' => 'Hauteur du capteur',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::AFF5
       * line : 122509
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::AFF5.FLIR:SensorHeight',
      'desc' => [
        'en' => 'Sensor Height',
        'fr' => 'Hauteur du capteur',
      ],
    ],
  ];

}
