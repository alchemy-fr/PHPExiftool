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
class MDItemNumberOfPages extends AbstractTagGroup
{

  protected string $id = 'MacOS:MDItemNumberOfPages';

  protected string $name = 'MDItemNumberOfPages';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MD Item Number Of Pages',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::MDItem
       * line : 173247
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MacOS::MDItem.MacOS:MDItemNumberOfPages',
      'desc' => [
        'en' => 'MD Item Number Of Pages',
      ],
    ],
  ];

}
