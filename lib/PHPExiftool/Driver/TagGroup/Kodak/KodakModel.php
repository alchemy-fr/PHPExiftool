<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KodakModel extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakModel';

  protected string $name = 'KodakModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kodak Model',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158012
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:KodakModel',
      'desc' => [
        'en' => 'Kodak Model',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type11
       * line : 160294
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type11.Kodak:KodakModel',
      'desc' => [
        'en' => 'Kodak Model',
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::Type2
       * line : 160351
       * type : string
       * writable : true
       * count : 32
       * flags : Permanent
       */
      'id' => 'Kodak::Type2.Kodak:KodakModel',
      'desc' => [
        'en' => 'Kodak Model',
      ],
    ],
  ];

}
