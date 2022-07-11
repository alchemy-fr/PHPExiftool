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
class CommanderGroupAMode extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CommanderGroupAMode';

  protected string $name = 'CommanderGroupAMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Commander Group A Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 229100
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderGroupAMode',
      'desc' => [
        'en' => 'Commander Group A Mode',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229587
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderGroupAMode',
      'desc' => [
        'en' => 'Commander Group A Mode',
      ],
    ],
  ];

}
