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
class FlashAction2 extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashAction2';

  protected string $name = 'FlashAction2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Action 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348362
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FlashAction2',
      'desc' => [
        'en' => 'Flash Action 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349754
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FlashAction2',
      'desc' => [
        'en' => 'Flash Action 2',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361463
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashAction2',
      'desc' => [
        'en' => 'Flash Action 2',
      ],
    ],
  ];

}
