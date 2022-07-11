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
class CustomSettingsAllDefault extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CustomSettingsAllDefault';

  protected string $name = 'CustomSettingsAllDefault';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom Settings All Default',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212115
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:CustomSettingsAllDefault',
      'desc' => [
        'en' => 'Custom Settings All Default',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224724
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:CustomSettingsAllDefault',
      'desc' => [
        'en' => 'Custom Settings All Default',
      ],
    ],
  ];

}
