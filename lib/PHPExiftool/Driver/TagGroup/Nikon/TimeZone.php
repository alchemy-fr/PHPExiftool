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
class TimeZone extends AbstractTagGroup
{

  protected string $id = 'Nikon:TimeZone';

  protected string $name = 'TimeZone';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Zone',
    'fr' => 'Fuseau horaire',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 202132
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:TimeZone',
      'desc' => [
        'en' => 'Time Zone',
        'fr' => 'Fuseau horaire',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202566
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:TimeZone',
      'desc' => [
        'en' => 'Time Zone',
        'fr' => 'Fuseau horaire',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::WorldTime
       * line : 209988
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::WorldTime.Nikon:TimeZone',
      'desc' => [
        'en' => 'Time Zone',
        'fr' => 'Fuseau horaire',
      ],
    ],
  ];

}
