<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AmbientTemperature extends AbstractTagGroup
{

  protected string $id = 'Reconyx:AmbientTemperature';

  protected string $name = 'AmbientTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Ambient Temperature',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 331036
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Main.Reconyx:AmbientTemperature',
      'desc' => [
        'en' => 'Ambient Temperature',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331305
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:AmbientTemperature',
      'desc' => [
        'en' => 'Ambient Temperature',
      ],
    ],
    2 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331530
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:AmbientTemperature',
      'desc' => [
        'en' => 'Ambient Temperature',
      ],
    ],
  ];

}
