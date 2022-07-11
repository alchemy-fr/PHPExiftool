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
class MatrixMetering extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:MatrixMetering';

  protected string $name = 'MatrixMetering';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Matrix Metering',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216767
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:MatrixMetering',
      'desc' => [
        'en' => 'Matrix Metering',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 219094
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:MatrixMetering',
      'desc' => [
        'en' => 'Matrix Metering',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221554
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:MatrixMetering',
      'desc' => [
        'en' => 'Matrix Metering',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231691
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:MatrixMetering',
      'desc' => [
        'en' => 'Matrix Metering',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 233443
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:MatrixMetering',
      'desc' => [
        'en' => 'Matrix Metering',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 242852
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:MatrixMetering',
      'desc' => [
        'en' => 'Matrix Metering',
      ],
    ],
  ];

}
