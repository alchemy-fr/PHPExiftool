<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PilotingMode extends AbstractTagGroup
{

  protected string $id = 'Parrot:PilotingMode';

  protected string $name = 'PilotingMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Piloting Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282544
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:PilotingMode',
      'desc' => [
        'en' => 'Piloting Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282736
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:PilotingMode',
      'desc' => [
        'en' => 'Piloting Mode',
      ],
    ],
    2 => [
      /**
       * table_name : Parrot::V3
       * line : 282980
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:PilotingMode',
      'desc' => [
        'en' => 'Piloting Mode',
      ],
    ],
  ];

}
