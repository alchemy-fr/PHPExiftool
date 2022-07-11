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
class FlashSyncSpeedAv extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:FlashSyncSpeedAv';

  protected string $name = 'FlashSyncSpeedAv';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Sync Speed Av',
    'fr' => 'Vitesse synchro en mode Av',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions10D
       * line : 71373
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions10D.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72860
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72883
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72911
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72934
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72957
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    6 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72984
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    7 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75762
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    8 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76283
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    9 => [
      /**
       * table_name : CanonCustom::Functions350D
       * line : 76818
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions350D.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    10 => [
      /**
       * table_name : CanonCustom::Functions400D
       * line : 77084
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions400D.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    11 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77407
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
    12 => [
      /**
       * table_name : CanonCustom::FunctionsD30
       * line : 78027
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::FunctionsD30.CanonCustom:FlashSyncSpeedAv',
      'desc' => [
        'en' => 'Flash Sync Speed Av',
        'fr' => 'Vitesse synchro en mode Av',
      ],
    ],
  ];

}
