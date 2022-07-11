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
class ItemPropertyAssociation extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ItemPropertyAssociation';

  protected string $name = 'ItemPropertyAssociation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Item Property Association',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemProp
       * line : 323528
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemProp.QuickTime:ItemPropertyAssociation',
      'desc' => [
        'en' => 'Item Property Association',
      ],
    ],
  ];

}
