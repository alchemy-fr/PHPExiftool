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
class MinFocalLength extends AbstractTagGroup
{

  protected string $id = 'Sony:MinFocalLength';

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
       * table_name : Sony::Tag2010e
       * line : 367271
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 370272
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371302
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374303
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377304
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393704
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
  ];

}
