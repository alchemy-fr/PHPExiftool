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
class AFPoint extends AbstractTagGroup
{

  protected string $id = 'Sony:AFPoint';

  protected string $name = 'AFPoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point',
    'fr' => 'Point AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341247
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341359
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::AFInfo
       * line : 342203
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345478
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 346061
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346454
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346735
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFPoint',
      'desc' => [
        'en' => 'AF Point',
        'fr' => 'Point AF',
      ],
    ],
  ];

}
