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
class MaxFocalLength extends AbstractTagGroup
{

  protected string $id = 'Sony:MaxFocalLength';

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
       * table_name : Sony::Tag2010e
       * line : 367281
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 370282
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371312
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374313
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377314
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393714
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:MaxFocalLength',
      'desc' => [
        'en' => 'Max Focal Length',
        'fr' => 'Focale maxi',
      ],
    ],
  ];

}
