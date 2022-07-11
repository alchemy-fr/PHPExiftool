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
class CommanderInternalTTLCompGroupB extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CommanderInternalTTLCompGroupB';

  protected string $name = 'CommanderInternalTTLCompGroupB';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Commander Internal TTL Comp Group B',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 225849
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:CommanderInternalTTLCompGroupB',
      'desc' => [
        'en' => 'Commander Internal TTL Comp Group B',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 227985
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommanderInternalTTLCompGroupB',
      'desc' => [
        'en' => 'Commander Internal TTL Comp Group B',
      ],
    ],
  ];

}
