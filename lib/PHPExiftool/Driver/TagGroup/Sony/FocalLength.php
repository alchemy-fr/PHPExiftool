<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLength extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalLength';

  protected string $name = 'FocalLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Length',
    'fr' => 'Focale de l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346290
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::PMP
       * line : 361865
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::PMP.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367253
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 370254
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371284
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374285
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377286
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393686
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:FocalLength',
      'desc' => [
        'en' => 'Focal Length',
        'fr' => 'Focale de l\'objectif',
      ],
    ],
  ];

}
