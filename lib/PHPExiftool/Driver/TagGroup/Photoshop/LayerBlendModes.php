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
class LayerBlendModes extends AbstractTagGroup
{

  protected string $id = 'Photoshop:LayerBlendModes';

  protected string $name = 'LayerBlendModes';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Layer Blend Modes',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Layers
       * line : 305549
       * type : undef
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'Photoshop::Layers.Photoshop:LayerBlendModes',
      'desc' => [
        'en' => 'Layer Blend Modes',
      ],
    ],
  ];

}
