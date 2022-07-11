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
class ElectronicFront_CurtainShutter extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ElectronicFront-CurtainShutter';

  protected string $name = 'ElectronicFront-CurtainShutter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Electronic Front-Curtain Shutter',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 217803
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:ElectronicFront-CurtainShutter',
      'desc' => [
        'en' => 'Electronic Front-Curtain Shutter',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220227
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:ElectronicFront-CurtainShutter',
      'desc' => [
        'en' => 'Electronic Front-Curtain Shutter',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 230162
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:ElectronicFront-CurtainShutter',
      'desc' => [
        'en' => 'Electronic Front-Curtain Shutter',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232112
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:ElectronicFront-CurtainShutter',
      'desc' => [
        'en' => 'Electronic Front-Curtain Shutter',
      ],
    ],
  ];

}
