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
class AELockButtonPlusDials extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AELockButtonPlusDials';

  protected string $name = 'AELockButtonPlusDials';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Lock Button Plus Dials',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213899
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AELockButtonPlusDials',
      'desc' => [
        'en' => 'AE Lock Button Plus Dials',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213927
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AELockButtonPlusDials',
      'desc' => [
        'en' => 'AE Lock Button Plus Dials',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 226369
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AELockButtonPlusDials',
      'desc' => [
        'en' => 'AE Lock Button Plus Dials',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231585
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AELockButtonPlusDials',
      'desc' => [
        'en' => 'AE Lock Button Plus Dials',
      ],
    ],
  ];

}
