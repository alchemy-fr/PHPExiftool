<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AnimationFrames extends AbstractTagGroup
{

  protected string $id = 'PNG:AnimationFrames';

  protected string $name = 'AnimationFrames';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Animation Frames',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::AnimationControl
       * line : 272721
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::AnimationControl.PNG:AnimationFrames',
      'desc' => [
        'en' => 'Animation Frames',
      ],
    ],
  ];

}
