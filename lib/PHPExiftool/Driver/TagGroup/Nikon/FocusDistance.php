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
class FocusDistance extends AbstractTagGroup
{

  protected string $id = 'Nikon:FocusDistance';

  protected string $name = 'FocusDistance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Distance',
    'fr' => 'Distance de mise au point',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData01
       * line : 195997
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196138
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196345
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196579
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
  ];

}
