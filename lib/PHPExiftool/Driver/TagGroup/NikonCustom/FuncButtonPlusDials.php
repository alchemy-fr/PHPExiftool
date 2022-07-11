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
class FuncButtonPlusDials extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:FuncButtonPlusDials';

  protected string $name = 'FuncButtonPlusDials';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Func Button Plus Dials',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213543
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FuncButtonPlusDials',
      'desc' => [
        'en' => 'Func Button Plus Dials',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213681
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:FuncButtonPlusDials',
      'desc' => [
        'en' => 'Func Button Plus Dials',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215662
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:FuncButtonPlusDials',
      'desc' => [
        'en' => 'Func Button Plus Dials',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226311
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:FuncButtonPlusDials',
      'desc' => [
        'en' => 'Func Button Plus Dials',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231529
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:FuncButtonPlusDials',
      'desc' => [
        'en' => 'Func Button Plus Dials',
      ],
    ],
  ];

}
