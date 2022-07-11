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
class ColorTemperatureCustom extends AbstractTagGroup
{

  protected string $id = 'Sony:ColorTemperatureCustom';

  protected string $name = 'ColorTemperatureCustom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temperature Custom',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347184
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ColorTemperatureCustom',
      'desc' => [
        'en' => 'Color Temperature Custom',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348796
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ColorTemperatureCustom',
      'desc' => [
        'en' => 'Color Temperature Custom',
      ],
    ],
  ];

}
