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
class LayerIDs extends AbstractTagGroup
{

  protected string $id = 'Photoshop:LayerIDs';

  protected string $name = 'LayerIDs';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Layer IDs',
  ];

  protected int $count = 0;

  protected int $flags = 96;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Layers
       * line : 305697
       * type : int32u
       * writable : false
       * count : 
       * flags : List,Unknown
       */
      'id' => 'Photoshop::Layers.Photoshop:LayerIDs',
      'desc' => [
        'en' => 'Layer IDs',
      ],
    ],
  ];

}
