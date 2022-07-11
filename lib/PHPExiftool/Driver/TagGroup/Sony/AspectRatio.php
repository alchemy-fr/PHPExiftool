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
class AspectRatio extends AbstractTagGroup
{

  protected string $id = 'Sony:AspectRatio';

  protected string $name = 'AspectRatio';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Aspect Ratio',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348521
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:AspectRatio',
      'desc' => [
        'en' => 'Aspect Ratio',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349869
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:AspectRatio',
      'desc' => [
        'en' => 'Aspect Ratio',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350552
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:AspectRatio',
      'desc' => [
        'en' => 'Aspect Ratio',
      ],
    ],
  ];

}
