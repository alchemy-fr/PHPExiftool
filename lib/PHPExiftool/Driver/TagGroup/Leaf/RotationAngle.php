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
class RotationAngle extends AbstractTagGroup
{

  protected string $id = 'Leaf:RotationAngle';

  protected string $name = 'RotationAngle';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rotation Angle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ImageProfile
       * line : 162189
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ImageProfile.Leaf:RotationAngle',
      'desc' => [
        'en' => 'Rotation Angle',
      ],
    ],
  ];

}
