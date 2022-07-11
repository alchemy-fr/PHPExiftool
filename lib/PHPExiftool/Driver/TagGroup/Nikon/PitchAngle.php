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
class PitchAngle extends AbstractTagGroup
{

  protected string $id = 'Nikon:PitchAngle';

  protected string $name = 'PitchAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pitch Angle',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 207284
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 208090
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208279
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 209484
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209576
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209689
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209772
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
  ];

}
