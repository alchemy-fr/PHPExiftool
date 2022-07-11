<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ItemList;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Genre extends AbstractTagGroup
{

  protected string $id = 'ItemList:Genre';

  protected string $name = 'Genre';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Genre',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemList
       * line : 322516
       * type : undef
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::ItemList.ItemList:Genre',
      'desc' => [
        'en' => 'Genre',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::ItemList
       * line : 323416
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemList.ItemList:Genre',
      'desc' => [
        'en' => 'Genre',
      ],
    ],
  ];

}
