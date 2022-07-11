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
class DynamicRangeOptimizerSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:DynamicRangeOptimizerSetting';

  protected string $name = 'DynamicRangeOptimizerSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Dynamic Range Optimizer Setting',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350625
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:DynamicRangeOptimizerSetting',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Setting',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360494
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:DynamicRangeOptimizerSetting',
      'desc' => [
        'en' => 'Dynamic Range Optimizer Setting',
      ],
    ],
  ];

}
