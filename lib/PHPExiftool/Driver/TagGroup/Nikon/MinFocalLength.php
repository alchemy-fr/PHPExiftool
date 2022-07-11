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
class MinFocalLength extends AbstractTagGroup
{

  protected string $id = 'Nikon:MinFocalLength';

  protected string $name = 'MinFocalLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Min Focal Length',
    'fr' => 'Focale mini',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData00
       * line : 195911
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData00.Nikon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData01
       * line : 196043
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196184
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196391
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
  ];

}
