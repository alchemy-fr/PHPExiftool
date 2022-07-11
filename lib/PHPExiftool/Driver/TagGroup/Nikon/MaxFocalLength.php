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
class MaxFocalLength extends AbstractTagGroup
{

  protected string $id = 'Nikon:MaxFocalLength';

  protected string $name = 'MaxFocalLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Focal Length',
    'fr' => 'Focale maxi',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195921
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196053
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196194
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196401
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
  ];

}
