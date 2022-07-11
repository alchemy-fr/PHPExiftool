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
class ColorCompensationFilterCustom extends AbstractTagGroup
{

  protected string $id = 'Sony:ColorCompensationFilterCustom';

  protected string $name = 'ColorCompensationFilterCustom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Compensation Filter Custom',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347189
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ColorCompensationFilterCustom',
      'desc' => [
        'en' => 'Color Compensation Filter Custom',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348801
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ColorCompensationFilterCustom',
      'desc' => [
        'en' => 'Color Compensation Filter Custom',
      ],
    ],
  ];

}
