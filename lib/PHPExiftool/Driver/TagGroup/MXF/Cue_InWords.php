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
class Cue_InWords extends AbstractTagGroup
{

  protected string $id = 'MXF:Cue-InWords';

  protected string $name = 'Cue-InWords';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cue-In Words',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169297
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:Cue-InWords',
      'desc' => [
        'en' => 'Cue-In Words',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171093
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:Cue-InWords',
      'desc' => [
        'en' => 'Cue-In Words',
      ],
    ],
  ];

}
