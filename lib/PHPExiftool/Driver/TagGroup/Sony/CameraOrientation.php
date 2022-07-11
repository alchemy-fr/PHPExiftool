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
class CameraOrientation extends AbstractTagGroup
{

  protected string $id = 'Sony:CameraOrientation';

  protected string $name = 'CameraOrientation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Orientation',
    'fr' => 'Orientation de l\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ExtraInfo3
       * line : 352840
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo3.Sony:CameraOrientation',
      'desc' => [
        'en' => 'Camera Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::ExtraInfo3
       * line : 352898
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo3.Sony:CameraOrientation',
      'desc' => [
        'en' => 'Camera Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384436
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400a.Sony:CameraOrientation',
      'desc' => [
        'en' => 'Camera Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384669
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400b.Sony:CameraOrientation',
      'desc' => [
        'en' => 'Camera Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384916
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400c.Sony:CameraOrientation',
      'desc' => [
        'en' => 'Camera Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
  ];

}
