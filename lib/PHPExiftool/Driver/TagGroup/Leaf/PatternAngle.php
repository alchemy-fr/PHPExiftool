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
class PatternAngle extends AbstractTagGroup
{

  protected string $id = 'Leaf:PatternAngle';

  protected string $name = 'PatternAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pattern Rotation Angle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Main
       * line : 162258
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Main.Leaf:PatternAngle',
      'desc' => [
        'en' => 'Pattern Rotation Angle',
      ],
    ],
  ];

}
