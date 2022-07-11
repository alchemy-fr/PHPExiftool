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
class FocusPosition extends AbstractTagGroup
{

  protected string $id = 'Nikon:FocusPosition';

  protected string $name = 'FocusPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Position',
    'fr' => 'Distance de mise au point',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData01
       * line : 195988
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:FocusPosition',
      'desc' => [
        'en' => 'Focus Position',
        'fr' => 'Distance de mise au point',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196129
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:FocusPosition',
      'desc' => [
        'en' => 'Focus Position',
        'fr' => 'Distance de mise au point',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196336
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:FocusPosition',
      'desc' => [
        'en' => 'Focus Position',
        'fr' => 'Distance de mise au point',
      ],
    ],
  ];

}
