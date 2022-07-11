<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlackLevel extends AbstractTagGroup
{

  protected string $id = 'SR2SubIFD:BlackLevel';

  protected string $name = 'BlackLevel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Black Level',
    'fr' => 'Niveau noir',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 362027
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 362046
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
  ];

}
