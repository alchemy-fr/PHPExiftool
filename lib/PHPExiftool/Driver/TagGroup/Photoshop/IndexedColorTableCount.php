<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IndexedColorTableCount extends AbstractTagGroup
{

  protected string $id = 'Photoshop:IndexedColorTableCount';

  protected string $name = 'IndexedColorTableCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Indexed Color Table Count',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305901
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Photoshop::Main.Photoshop:IndexedColorTableCount',
      'desc' => [
        'en' => 'Indexed Color Table Count',
      ],
    ],
  ];

}
