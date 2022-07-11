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
class FlashAction extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashAction';

  protected string $name = 'FlashAction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Action',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348260
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FlashAction',
      'desc' => [
        'en' => 'Flash Action',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349652
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FlashAction',
      'desc' => [
        'en' => 'Flash Action',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 354792
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:FlashAction',
      'desc' => [
        'en' => 'Flash Action',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361344
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashAction',
      'desc' => [
        'en' => 'Flash Action',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361379
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashAction',
      'desc' => [
        'en' => 'Flash Action',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361435
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashAction',
      'desc' => [
        'en' => 'Flash Action',
      ],
    ],
  ];

}
