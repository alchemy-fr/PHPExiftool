<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CmdDialsChangeMainSub extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:CmdDialsChangeMainSub';

  protected string $name = 'CmdDialsChangeMainSub';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cmd Dials Change Main Sub',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 244995
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:CmdDialsChangeMainSub',
      'desc' => [
        'en' => 'Cmd Dials Change Main Sub',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 245006
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:CmdDialsChangeMainSub',
      'desc' => [
        'en' => 'Cmd Dials Change Main Sub',
      ],
    ],
    2 => [
      /**
       * table_name : NikonSettings::Main
       * line : 245017
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:CmdDialsChangeMainSub',
      'desc' => [
        'en' => 'Cmd Dials Change Main Sub',
      ],
    ],
  ];

}
