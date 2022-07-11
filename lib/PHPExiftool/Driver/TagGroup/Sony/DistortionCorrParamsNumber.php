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
class DistortionCorrParamsNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:DistortionCorrParamsNumber';

  protected string $name = 'DistortionCorrParamsNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion Corr Params Number',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag2010e
       * line : 369254
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010e.Sony:DistortionCorrParamsNumber',
      'desc' => [
        'en' => 'Distortion Corr Params Number',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag2010g
       * line : 373285
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010g.Sony:DistortionCorrParamsNumber',
      'desc' => [
        'en' => 'Distortion Corr Params Number',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag2010h
       * line : 376286
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010h.Sony:DistortionCorrParamsNumber',
      'desc' => [
        'en' => 'Distortion Corr Params Number',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag2010i
       * line : 379287
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag2010i.Sony:DistortionCorrParamsNumber',
      'desc' => [
        'en' => 'Distortion Corr Params Number',
      ],
    ],
  ];

}
