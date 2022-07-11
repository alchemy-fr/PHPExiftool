<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTemperature extends AbstractTagGroup
{

  protected string $id = 'Minolta:ColorTemperature';

  protected string $name = 'ColorTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temperature',
    'fr' => 'Température de couleur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179287
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179438
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 180221
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181800
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 182784
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
    5 => [
      /**
       * table_name : Minolta::Main
       * line : 184192
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
  ];

}
