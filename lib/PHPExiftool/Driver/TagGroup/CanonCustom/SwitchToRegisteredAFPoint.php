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
class SwitchToRegisteredAFPoint extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:SwitchToRegisteredAFPoint';

  protected string $name = 'SwitchToRegisteredAFPoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Switch To Registered AF Point',
    'fr' => 'Activer collimateur enregistré',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions1D
       * line : 72299
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions1D.CanonCustom:SwitchToRegisteredAFPoint',
      'desc' => [
        'en' => 'Switch To Registered AF Point',
        'fr' => 'Activer collimateur enregistré',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73916
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SwitchToRegisteredAFPoint',
      'desc' => [
        'en' => 'Switch To Registered AF Point',
        'fr' => 'Activer collimateur enregistré',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73939
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SwitchToRegisteredAFPoint',
      'desc' => [
        'en' => 'Switch To Registered AF Point',
        'fr' => 'Activer collimateur enregistré',
      ],
    ],
  ];

}
