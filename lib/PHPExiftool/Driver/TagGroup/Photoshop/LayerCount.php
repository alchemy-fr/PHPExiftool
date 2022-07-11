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
class LayerCount extends AbstractTagGroup
{

  protected string $id = 'Photoshop:LayerCount';

  protected string $name = 'LayerCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Layer Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Layers
       * line : 305677
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Layers.Photoshop:LayerCount',
      'desc' => [
        'en' => 'Layer Count',
      ],
    ],
  ];

}
