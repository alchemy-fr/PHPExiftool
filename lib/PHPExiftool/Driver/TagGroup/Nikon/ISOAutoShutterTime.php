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
class ISOAutoShutterTime extends AbstractTagGroup
{

  protected string $id = 'Nikon:ISOAutoShutterTime';

  protected string $name = 'ISOAutoShutterTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Auto Shutter Time',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201025
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:ISOAutoShutterTime',
      'desc' => [
        'en' => 'ISO Auto Shutter Time',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD4S
       * line : 207036
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD4S.Nikon:ISOAutoShutterTime',
      'desc' => [
        'en' => 'ISO Auto Shutter Time',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207805
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:ISOAutoShutterTime',
      'desc' => [
        'en' => 'ISO Auto Shutter Time',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 209236
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:ISOAutoShutterTime',
      'desc' => [
        'en' => 'ISO Auto Shutter Time',
      ],
    ],
  ];

}
