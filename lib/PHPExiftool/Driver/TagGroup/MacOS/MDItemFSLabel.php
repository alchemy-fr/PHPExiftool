<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MacOS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MDItemFSLabel extends AbstractTagGroup
{

  protected string $id = 'MacOS:MDItemFSLabel';

  protected string $name = 'MDItemFSLabel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'MD Item FS Label',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::MDItem
       * line : 173081
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'MacOS::MDItem.MacOS:MDItemFSLabel',
      'desc' => [
        'en' => 'MD Item FS Label',
      ],
    ],
  ];

}
