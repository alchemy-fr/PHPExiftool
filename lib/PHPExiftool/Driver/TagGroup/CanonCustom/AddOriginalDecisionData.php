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
class AddOriginalDecisionData extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AddOriginalDecisionData';

  protected string $name = 'AddOriginalDecisionData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Add Original Decision Data',
    'fr' => 'Aj. données décis. origine',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75539
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AddOriginalDecisionData',
      'desc' => [
        'en' => 'Add Original Decision Data',
        'fr' => 'Aj. données décis. origine',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions20D
       * line : 76157
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions20D.CanonCustom:AddOriginalDecisionData',
      'desc' => [
        'en' => 'Add Original Decision Data',
        'fr' => 'Aj. données décis. origine',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76698
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:AddOriginalDecisionData',
      'desc' => [
        'en' => 'Add Original Decision Data',
        'fr' => 'Aj. données décis. origine',
      ],
    ],
    3 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77836
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:AddOriginalDecisionData',
      'desc' => [
        'en' => 'Add Original Decision Data',
        'fr' => 'Aj. données décis. origine',
      ],
    ],
  ];

}
