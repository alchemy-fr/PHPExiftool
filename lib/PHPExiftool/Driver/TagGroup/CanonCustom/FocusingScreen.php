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
class FocusingScreen extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:FocusingScreen';

  protected string $name = 'FocusingScreen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focusing Screen',
    'fr' => 'Verre de visée',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions1D
       * line : 71859
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions1D.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75355
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75372
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75389
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75406
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75420
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    6 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75434
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
    7 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77295
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:FocusingScreen',
      'desc' => [
        'en' => 'Focusing Screen',
        'fr' => 'Verre de visée',
      ],
    ],
  ];

}
