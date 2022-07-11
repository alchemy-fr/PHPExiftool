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
class DynamicRangeOptimizerMode extends AbstractTagGroup
{

  protected string $id = 'Sony:DynamicRangeOptimizerMode';

  protected string $name = 'DynamicRangeOptimizerMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Dynamic Range Optimizer Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347586
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:DynamicRangeOptimizerMode',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349154
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:DynamicRangeOptimizerMode',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Mode',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353362
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerMode',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Mode',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353736
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerMode',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Mode',
      ],
    ],
  ];

}
