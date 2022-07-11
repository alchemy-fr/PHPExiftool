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
class YawAngle extends AbstractTagGroup
{

  protected string $id = 'Nikon:YawAngle';

  protected string $name = 'YawAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Yaw Angle',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 207288
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 208094
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208283
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 209488
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209580
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209693
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209776
       * type : fixed32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
  ];

}
