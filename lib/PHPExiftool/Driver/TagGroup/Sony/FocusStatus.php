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
class FocusStatus extends AbstractTagGroup
{

  protected string $id = 'Sony:FocusStatus';

  protected string $name = 'FocusStatus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Status',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346504
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:FocusStatus',
      'desc' => [
        'en' => 'Focus Status',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348484
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FocusStatus',
      'desc' => [
        'en' => 'Focus Status',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349832
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FocusStatus',
      'desc' => [
        'en' => 'Focus Status',
      ],
    ],
  ];

}
