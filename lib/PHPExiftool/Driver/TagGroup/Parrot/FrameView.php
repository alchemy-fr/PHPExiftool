<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameView extends AbstractTagGroup
{

  protected string $id = 'Parrot:FrameView';

  protected string $name = 'FrameView';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Frame View',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282383
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:FrameView',
      'desc' => [
        'en' => 'Frame View',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282656
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:FrameView',
      'desc' => [
        'en' => 'Frame View',
      ],
    ],
    2 => [
      /**
       * table_name : Parrot::V3
       * line : 282866
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:FrameView',
      'desc' => [
        'en' => 'Frame View',
      ],
    ],
  ];

}
