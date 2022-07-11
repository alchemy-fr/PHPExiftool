<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ItemInfoEntry extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ItemInfoEntry';

  protected string $name = 'ItemInfoEntry';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Item Info Entry',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemInfo
       * line : 314403
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemInfo.QuickTime:ItemInfoEntry',
      'desc' => [
        'en' => 'Item Info Entry',
      ],
    ],
  ];

}
