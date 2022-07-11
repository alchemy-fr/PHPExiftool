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
class FineTuneOptMatrixMetering extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:FineTuneOptMatrixMetering';

  protected string $name = 'FineTuneOptMatrixMetering';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Fine Tune Opt Matrix Metering',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212845
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215334
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218004
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220428
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD610
       * line : 224437
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD610.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225214
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    6 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230417
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    7 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232309
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    8 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234751
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
    9 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235795
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:FineTuneOptMatrixMetering',
      'desc' => [
        'en' => 'Fine Tune Opt Matrix Metering',
      ],
    ],
  ];

}
