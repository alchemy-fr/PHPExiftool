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
class ExposureProgram extends AbstractTagGroup
{

  protected string $id = 'Sony:ExposureProgram';

  protected string $name = 'ExposureProgram';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Program',
    'fr' => 'Programme d\'exposition',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343140
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343482
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348088
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349480
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350182
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::ExtraInfo3
       * line : 352662
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo3.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353442
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360197
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 363004
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 364002
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    10 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 365025
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    11 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365991
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    12 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367010
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    13 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 370017
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    14 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371047
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    15 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374048
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    16 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377049
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    17 => [
      /**
       * table_name : Sony::Tag9404a
       * line : 385168
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9404a.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    18 => [
      /**
       * table_name : Sony::Tag9404b
       * line : 385422
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9404b.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    19 => [
      /**
       * table_name : Sony::Tag9404c
       * line : 385679
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9404c.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    20 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388217
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    21 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391413
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
  ];

}
