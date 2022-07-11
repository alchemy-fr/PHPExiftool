<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AF_CPrioritySel extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:AF-CPrioritySel';

  protected string $name = 'AF-CPrioritySel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF-C Priority Sel',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 243873
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:AF-CPrioritySel',
      'desc' => [
        'en' => 'AF-C Priority Sel',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 243890
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:AF-CPrioritySel',
      'desc' => [
        'en' => 'AF-C Priority Sel',
      ],
    ],
  ];

}
