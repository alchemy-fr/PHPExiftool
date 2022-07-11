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
class ExposureLevelIncrements extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ExposureLevelIncrements';

  protected string $name = 'ExposureLevelIncrements';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Level Increments',
    'fr' => 'Paliers de réglage d\'expo',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions10D
       * line : 71464
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions10D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions1D
       * line : 72000
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions1D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72414
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72441
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75844
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76365
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    6 => [
      /**
       * table_name : CanonCustom::Functions350D
       * line : 76900
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions350D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    7 => [
      /**
       * table_name : CanonCustom::Functions400D
       * line : 77166
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions400D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    8 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77483
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    9 => [
      /**
       * table_name : CanonCustom::FunctionsD30
       * line : 77967
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::FunctionsD30.CanonCustom:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
  ];

}
