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
class DynamicRangeOptimizerLevel extends AbstractTagGroup
{

  protected string $id = 'Sony:DynamicRangeOptimizerLevel';

  protected string $name = 'DynamicRangeOptimizerLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Dynamic Range Optimizer Level',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347607
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Level',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349175
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Level',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350641
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Level',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353757
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Level',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360510
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:DynamicRangeOptimizerLevel',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Level',
      ],
    ],
  ];

}
