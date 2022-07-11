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
class AFPointAreaExpansion extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AFPointAreaExpansion';

  protected string $name = 'AFPointAreaExpansion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Area Expansion',
    'fr' => 'Extension de la zone AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73760
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AFPointAreaExpansion',
      'desc' => [
        'en' => 'AF Point Area Expansion',
        'fr' => 'Extension de la zone AF',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73783
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AFPointAreaExpansion',
      'desc' => [
        'en' => 'AF Point Area Expansion',
        'fr' => 'Extension de la zone AF',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73805
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AFPointAreaExpansion',
      'desc' => [
        'en' => 'AF Point Area Expansion',
        'fr' => 'Extension de la zone AF',
      ],
    ],
  ];

}
