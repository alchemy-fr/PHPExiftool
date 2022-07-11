<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AnimationLoopCount extends AbstractTagGroup
{

  protected string $id = 'RIFF:AnimationLoopCount';

  protected string $name = 'AnimationLoopCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Animation Loop Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::ANIM
       * line : 327242
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::ANIM.RIFF:AnimationLoopCount',
      'desc' => [
        'en' => 'Animation Loop Count',
      ],
    ],
  ];

}
