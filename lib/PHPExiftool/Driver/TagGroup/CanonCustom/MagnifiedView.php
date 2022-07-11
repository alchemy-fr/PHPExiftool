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
class MagnifiedView extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:MagnifiedView';

  protected string $name = 'MagnifiedView';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Magnified View',
    'fr' => 'Agrandissement en lecture',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions30D
       * line : 76639
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions30D.CanonCustom:MagnifiedView',
      'desc' => [
        'en' => 'Magnified View',
        'fr' => 'Agrandissement en lecture',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions400D
       * line : 77252
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions400D.CanonCustom:MagnifiedView',
      'desc' => [
        'en' => 'Magnified View',
        'fr' => 'Agrandissement en lecture',
      ],
    ],
  ];

}
