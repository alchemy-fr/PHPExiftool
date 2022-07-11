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
class AFPointBrightness extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AFPointBrightness';

  protected string $name = 'AFPointBrightness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Brightness',
    'fr' => 'Intensité d\'illumination AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212406
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointBrightness',
      'desc' => [
        'en' => 'AF Point Brightness',
        'fr' => 'Intensité d\'illumination AF',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216546
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AFPointBrightness',
      'desc' => [
        'en' => 'AF Point Brightness',
        'fr' => 'Intensité d\'illumination AF',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217711
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:AFPointBrightness',
      'desc' => [
        'en' => 'AF Point Brightness',
        'fr' => 'Intensité d\'illumination AF',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220135
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:AFPointBrightness',
      'desc' => [
        'en' => 'AF Point Brightness',
        'fr' => 'Intensité d\'illumination AF',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229931
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AFPointBrightness',
      'desc' => [
        'en' => 'AF Point Brightness',
        'fr' => 'Intensité d\'illumination AF',
      ],
    ],
    5 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232020
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AFPointBrightness',
      'desc' => [
        'en' => 'AF Point Brightness',
        'fr' => 'Intensité d\'illumination AF',
      ],
    ],
  ];

}
