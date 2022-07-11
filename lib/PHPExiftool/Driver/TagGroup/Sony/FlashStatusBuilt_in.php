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
class FlashStatusBuilt_in extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashStatusBuilt-in';

  protected string $name = 'FlashStatusBuilt-in';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Status Built-in',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351529
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:FlashStatusBuilt-in',
      'desc' => [
        'en' => 'Flash Status Built-in',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351708
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:FlashStatusBuilt-in',
      'desc' => [
        'en' => 'Flash Status Built-in',
      ],
    ],
  ];

}
