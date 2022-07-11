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
class ColorTemperatureSet extends AbstractTagGroup
{

  protected string $id = 'Sony:ColorTemperatureSet';

  protected string $name = 'ColorTemperatureSet';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temperature Set',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347174
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ColorTemperatureSet',
      'desc' => [
        'en' => 'Color Temperature Set',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348783
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ColorTemperatureSet',
      'desc' => [
        'en' => 'Color Temperature Set',
      ],
    ],
  ];

}
