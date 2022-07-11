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
class CmdDialsReverseRotation extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CmdDialsReverseRotation';

  protected string $name = 'CmdDialsReverseRotation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cmd Dials Reverse Rotation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 238055
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:CmdDialsReverseRotation',
      'desc' => [
        'en' => 'Cmd Dials Reverse Rotation',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 238066
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:CmdDialsReverseRotation',
      'desc' => [
        'en' => 'Cmd Dials Reverse Rotation',
      ],
    ],
  ];

}
