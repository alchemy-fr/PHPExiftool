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
class ImageStyle extends AbstractTagGroup
{

  protected string $id = 'Sony:ImageStyle';

  protected string $name = 'ImageStyle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Style',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348002
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ImageStyle',
      'desc' => [
        'en' => 'Image Style',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349433
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ImageStyle',
      'desc' => [
        'en' => 'Image Style',
      ],
    ],
  ];

}
