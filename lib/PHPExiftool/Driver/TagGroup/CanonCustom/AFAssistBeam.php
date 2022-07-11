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
class AFAssistBeam extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AFAssistBeam';

  protected string $name = 'AFAssistBeam';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Assist Beam',
    'fr' => 'Faisceau d\'assistance AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74068
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74091
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75818
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76339
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions350D
       * line : 76874
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions350D.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions400D
       * line : 77140
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions400D.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    6 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77463
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:AFAssistBeam',
      'desc' => [
        'en' => 'AF Assist Beam',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
  ];

}
