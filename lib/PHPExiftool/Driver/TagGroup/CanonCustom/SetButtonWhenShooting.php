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
class SetButtonWhenShooting extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:SetButtonWhenShooting';

  protected string $name = 'SetButtonWhenShooting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Set Button When Shooting',
    'fr' => 'Touche SET au déclenchement',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions10D
       * line : 71309
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions10D.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74734
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74785
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74828
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    4 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74874
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    5 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74916
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    6 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74954
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    7 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74998
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    8 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75006
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    9 => [
      /**
       * table_name : CanonCustom::FunctionsD30
       * line : 78168
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::FunctionsD30.CanonCustom:SetButtonWhenShooting',
      'desc' => [
        'en' => 'Set Button When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
  ];

}
