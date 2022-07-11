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
class ISOSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:ISOSetting';

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
       * table_name : Sony::CameraSettings
       * line : 347574
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349142
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350106
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353709
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::ISOInfo
       * line : 353788
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ISOInfo.Sony:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
  ];

}
