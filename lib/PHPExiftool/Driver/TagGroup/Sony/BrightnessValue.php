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
class BrightnessValue extends AbstractTagGroup
{

  protected string $id = 'Sony:BrightnessValue';

  protected string $name = 'BrightnessValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Brightness Value',
    'fr' => 'Luminosité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361106
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010a
       * line : 362561
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010a.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 363559
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010c
       * line : 364582
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010c.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010d
       * line : 365583
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010d.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 366567
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag2010f
       * line : 369574
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010f.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 370604
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 373605
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    9 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 376606
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
  ];

}
