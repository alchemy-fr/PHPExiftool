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
class DistortionCorrParams extends AbstractTagGroup
{

  protected string $id = 'Sony:DistortionCorrParams';

  protected string $name = 'DistortionCorrParams';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion Corr Params',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010b
       * line : 364242
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010b.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 367294
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 371325
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 374326
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 377327
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 387910
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405a.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390544
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393605
       * type : int16s
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:DistortionCorrParams',
      'desc' => [
        'en' => 'Distortion Corr Params',
      ],
    ],
  ];

}
