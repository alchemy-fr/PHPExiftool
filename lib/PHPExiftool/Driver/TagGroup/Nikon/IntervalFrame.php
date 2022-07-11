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
class IntervalFrame extends AbstractTagGroup
{

  protected string $id = 'Nikon:IntervalFrame';

  protected string $name = 'IntervalFrame';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Interval Frame',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207462
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:IntervalFrame',
      'desc' => [
        'en' => 'Interval Frame',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208269
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:IntervalFrame',
      'desc' => [
        'en' => 'Interval Frame',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209673
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:IntervalFrame',
      'desc' => [
        'en' => 'Interval Frame',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209756
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:IntervalFrame',
      'desc' => [
        'en' => 'Interval Frame',
      ],
    ],
  ];

}
