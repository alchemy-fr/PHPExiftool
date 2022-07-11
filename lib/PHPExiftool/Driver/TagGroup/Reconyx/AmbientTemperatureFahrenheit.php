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
class AmbientTemperatureFahrenheit extends AbstractTagGroup
{

  protected string $id = 'Reconyx:AmbientTemperatureFahrenheit';

  protected string $name = 'AmbientTemperatureFahrenheit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Ambient Temperature Fahrenheit',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 331032
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Main.Reconyx:AmbientTemperatureFahrenheit',
      'desc' => [
        'en' => 'Ambient Temperature Fahrenheit',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331301
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:AmbientTemperatureFahrenheit',
      'desc' => [
        'en' => 'Ambient Temperature Fahrenheit',
      ],
    ],
    2 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331526
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:AmbientTemperatureFahrenheit',
      'desc' => [
        'en' => 'Ambient Temperature Fahrenheit',
      ],
    ],
  ];

}
