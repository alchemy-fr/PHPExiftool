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
class AFStatusMiddleHorizontal extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusMiddleHorizontal';

  protected string $name = 'AFStatusMiddleHorizontal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Middle Horizontal',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 346167
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFStatusMiddleHorizontal',
      'desc' => [
        'en' => 'AF Status Middle Horizontal',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346880
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusMiddleHorizontal',
      'desc' => [
        'en' => 'AF Status Middle Horizontal',
      ],
    ],
  ];

}
