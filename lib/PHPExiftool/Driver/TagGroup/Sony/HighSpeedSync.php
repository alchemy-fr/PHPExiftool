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
class HighSpeedSync extends AbstractTagGroup
{

  protected string $id = 'Sony:HighSpeedSync';

  protected string $name = 'HighSpeedSync';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'High Speed Sync',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347032
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:HighSpeedSync',
      'desc' => [
        'en' => 'High Speed Sync',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348717
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:HighSpeedSync',
      'desc' => [
        'en' => 'High Speed Sync',
      ],
    ],
  ];

}
