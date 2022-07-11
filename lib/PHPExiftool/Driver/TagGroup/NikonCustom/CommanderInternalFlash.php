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
class CommanderInternalFlash extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CommanderInternalFlash';

  protected string $name = 'CommanderInternalFlash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Commander Internal Flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 229066
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:CommanderInternalFlash',
      'desc' => [
        'en' => 'Commander Internal Flash',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD800
       * line : 229546
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD800.NikonCustom:CommanderInternalFlash',
      'desc' => [
        'en' => 'Commander Internal Flash',
      ],
    ],
  ];

}
