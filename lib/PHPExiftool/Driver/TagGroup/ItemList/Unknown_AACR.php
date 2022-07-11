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
class Unknown_AACR extends AbstractTagGroup
{

  protected string $id = 'ItemList:Unknown_AACR';

  protected string $name = 'Unknown_AACR';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown AACR',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemList
       * line : 314422
       * type : string
       * writable : true
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::ItemList.ItemList:Unknown_AACR',
      'desc' => [
        'en' => 'Unknown AACR',
      ],
    ],
  ];

}
