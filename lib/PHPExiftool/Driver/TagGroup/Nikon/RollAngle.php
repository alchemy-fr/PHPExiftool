<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RollAngle extends AbstractTagGroup
{

  protected string $id = 'Nikon:RollAngle';

  protected string $name = 'RollAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Roll Angle',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 207280
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 208086
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208275
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 209480
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209572
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209685
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209768
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
  ];

}
