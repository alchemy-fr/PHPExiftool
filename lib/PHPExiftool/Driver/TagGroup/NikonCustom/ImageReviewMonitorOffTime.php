<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageReviewMonitorOffTime extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ImageReviewMonitorOffTime';

  protected string $name = 'ImageReviewMonitorOffTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Review Monitor Off Time',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216025
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218621
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221071
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224585
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231157
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232970
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235994
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:ImageReviewMonitorOffTime',
      'desc' => [
        'en' => 'Image Review Monitor Off Time',
      ],
    ],
  ];

}
