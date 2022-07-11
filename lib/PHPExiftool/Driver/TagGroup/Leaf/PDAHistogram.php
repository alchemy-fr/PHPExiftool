<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PDAHistogram extends AbstractTagGroup
{

  protected string $id = 'Leaf:PDAHistogram';

  protected string $name = 'PDAHistogram';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'PDA Histogram',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Main
       * line : 162236
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Leaf::Main.Leaf:PDAHistogram',
      'desc' => [
        'en' => 'PDA Histogram',
      ],
    ],
  ];

}
