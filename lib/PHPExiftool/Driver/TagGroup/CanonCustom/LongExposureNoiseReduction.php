<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LongExposureNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:LongExposureNoiseReduction';

  protected string $name = 'LongExposureNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Long Exposure Noise Reduction',
    'fr' => 'Réduct. bruit longue expo.',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73101
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75715
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76227
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions350D
       * line : 76771
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions350D.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions400D
       * line : 77028
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions400D.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77351
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    6 => [
      /**
       * table_name : CanonCustom::FunctionsD30
       * line : 77869
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::FunctionsD30.CanonCustom:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
  ];

}
