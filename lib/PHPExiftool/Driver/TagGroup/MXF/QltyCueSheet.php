<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class QltyCueSheet extends AbstractTagGroup
{

  protected string $id = 'MXF:QltyCueSheet';

  protected string $name = 'QltyCueSheet';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Qlty Cue Sheet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171727
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyCueSheet',
      'desc' => [
        'en' => 'Qlty Cue Sheet',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171730
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyCueSheet',
      'desc' => [
        'en' => 'Qlty Cue Sheet',
      ],
    ],
  ];

}
