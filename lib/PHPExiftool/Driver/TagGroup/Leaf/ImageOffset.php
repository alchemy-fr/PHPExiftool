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
class ImageOffset extends AbstractTagGroup
{

  protected string $id = 'Leaf:ImageOffset';

  protected string $name = 'ImageOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Offset',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::CaptureProfile
       * line : 162050
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::CaptureProfile.Leaf:ImageOffset',
      'desc' => [
        'en' => 'Image Offset',
      ],
    ],
    1 => [
      /**
       * table_name : Leaf::Main
       * line : 162248
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Main.Leaf:ImageOffset',
      'desc' => [
        'en' => 'Image Offset',
      ],
    ],
  ];

}
