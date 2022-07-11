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
class ISOSetting extends AbstractTagGroup
{

  protected string $id = 'Minolta:ISOSetting';

  protected string $name = 'ISOSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Setting',
    'fr' => 'Réglage ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 178229
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179099
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 180070
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181124
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
  ];

}
