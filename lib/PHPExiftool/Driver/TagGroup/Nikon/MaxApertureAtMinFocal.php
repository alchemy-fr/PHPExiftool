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
class MaxApertureAtMinFocal extends AbstractTagGroup
{

  protected string $id = 'Nikon:MaxApertureAtMinFocal';

  protected string $name = 'MaxApertureAtMinFocal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Aperture At Min Focal',
    'fr' => 'Ouverture à la focale mini',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195931
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:MaxApertureAtMinFocal',
      'desc' => [
        'en' => 'Max Aperture At Min Focal',
        'fr' => 'Ouverture à la focale mini',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196063
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:MaxApertureAtMinFocal',
      'desc' => [
        'en' => 'Max Aperture At Min Focal',
        'fr' => 'Ouverture à la focale mini',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196204
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:MaxApertureAtMinFocal',
      'desc' => [
        'en' => 'Max Aperture At Min Focal',
        'fr' => 'Ouverture à la focale mini',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196411
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:MaxApertureAtMinFocal',
      'desc' => [
        'en' => 'Max Aperture At Min Focal',
        'fr' => 'Ouverture à la focale mini',
      ],
    ],
  ];

}
