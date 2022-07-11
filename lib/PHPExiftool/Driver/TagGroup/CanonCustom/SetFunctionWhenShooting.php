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
class SetFunctionWhenShooting extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:SetFunctionWhenShooting';

  protected string $name = 'SetFunctionWhenShooting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Set Function When Shooting',
    'fr' => 'Touche SET au déclenchement',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 75676
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:SetFunctionWhenShooting',
      'desc' => [
        'en' => 'Set Function When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76190
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:SetFunctionWhenShooting',
      'desc' => [
        'en' => 'Set Function When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77312
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:SetFunctionWhenShooting',
      'desc' => [
        'en' => 'Set Function When Shooting',
        'fr' => 'Touche SET au déclenchement',
      ],
    ],
  ];

}
