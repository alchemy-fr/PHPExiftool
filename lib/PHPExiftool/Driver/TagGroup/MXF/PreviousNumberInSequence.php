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
class PreviousNumberInSequence extends AbstractTagGroup
{

  protected string $id = 'MXF:PreviousNumberInSequence';

  protected string $name = 'PreviousNumberInSequence';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Previous Number In Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171239
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PreviousNumberInSequence',
      'desc' => [
        'en' => 'Previous Number In Sequence',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171242
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PreviousNumberInSequence',
      'desc' => [
        'en' => 'Previous Number In Sequence',
      ],
    ],
  ];

}
