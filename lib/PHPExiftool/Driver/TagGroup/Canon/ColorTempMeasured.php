<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTempMeasured extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempMeasured';

  protected string $name = 'ColorTempMeasured';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Measured',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59177
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59455
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData10
       * line : 59882
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60332
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61111
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61430
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61763
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62173
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62655
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempMeasured',
      'desc' => [
        'en' => 'Color Temp Measured',
      ],
    ],
  ];

}
