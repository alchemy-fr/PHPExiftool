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
class ShotsPerInterval extends AbstractTagGroup
{

  protected string $id = 'Nikon:ShotsPerInterval';

  protected string $name = 'ShotsPerInterval';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shots Per Interval',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200076
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:ShotsPerInterval',
      'desc' => [
        'en' => 'Shots Per Interval',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 200732
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:ShotsPerInterval',
      'desc' => [
        'en' => 'Shots Per Interval',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208293
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:ShotsPerInterval',
      'desc' => [
        'en' => 'Shots Per Interval',
      ],
    ],
  ];

}
