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
class MaxApertureAtMaxFocal extends AbstractTagGroup
{

  protected string $id = 'Nikon:MaxApertureAtMaxFocal';

  protected string $name = 'MaxApertureAtMaxFocal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Aperture At Max Focal',
    'fr' => 'Ouverture à la focale maxi',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195941
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:MaxApertureAtMaxFocal',
      'desc' => [
        'en' => 'Max Aperture At Max Focal',
        'fr' => 'Ouverture à la focale maxi',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196073
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:MaxApertureAtMaxFocal',
      'desc' => [
        'en' => 'Max Aperture At Max Focal',
        'fr' => 'Ouverture à la focale maxi',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196214
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:MaxApertureAtMaxFocal',
      'desc' => [
        'en' => 'Max Aperture At Max Focal',
        'fr' => 'Ouverture à la focale maxi',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196421
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:MaxApertureAtMaxFocal',
      'desc' => [
        'en' => 'Max Aperture At Max Focal',
        'fr' => 'Ouverture à la focale maxi',
      ],
    ],
  ];

}
