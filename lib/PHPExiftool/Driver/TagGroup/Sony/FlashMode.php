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
class FlashMode extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashMode';

  protected string $name = 'FlashMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Mode',
    'fr' => 'Mode flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347463
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 350029
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350917
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360783
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362523
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363521
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364544
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365545
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366529
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369536
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370566
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373567
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
    12 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376568
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:FlashMode',
      'desc' => [
        'en' => 'Flash Mode',
        'fr' => 'Mode flash',
      ],
    ],
  ];

}
