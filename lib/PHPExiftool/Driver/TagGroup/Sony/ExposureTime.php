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
class ExposureTime extends AbstractTagGroup
{

  protected string $id = 'Sony:ExposureTime';

  protected string $name = 'ExposureTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Time',
    'fr' => 'Temps de pose',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 346996
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348681
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361179
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361233
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361299
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::PMP
       * line : 361811
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::PMP.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387933
       * type : rational32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391386
       * type : rational32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::rtmd
       * line : 393804
       * type : rational64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
  ];

}
