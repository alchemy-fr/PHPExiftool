<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryLevel extends AbstractTagGroup
{

  protected string $id = 'Sony:BatteryLevel';

  protected string $name = 'BatteryLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Battery Level',
    'fr' => 'Niveau de batterie',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348469
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:BatteryLevel',
      'desc' => [
        'en' => 'Battery Level',
        'fr' => 'Niveau de batterie',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::ExtraInfo
       * line : 352495
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo.Sony:BatteryLevel',
      'desc' => [
        'en' => 'Battery Level',
        'fr' => 'Niveau de batterie',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::ExtraInfo2
       * line : 352517
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo2.Sony:BatteryLevel',
      'desc' => [
        'en' => 'Battery Level',
        'fr' => 'Niveau de batterie',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::ExtraInfo3
       * line : 352577
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo3.Sony:BatteryLevel',
      'desc' => [
        'en' => 'Battery Level',
        'fr' => 'Niveau de batterie',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9406
       * line : 390604
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9406.Sony:BatteryLevel',
      'desc' => [
        'en' => 'Battery Level',
        'fr' => 'Niveau de batterie',
      ],
    ],
  ];

}
