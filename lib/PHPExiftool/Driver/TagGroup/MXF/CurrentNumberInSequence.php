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
class CurrentNumberInSequence extends AbstractTagGroup
{

  protected string $id = 'MXF:CurrentNumberInSequence';

  protected string $name = 'CurrentNumberInSequence';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Current Number In Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171245
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CurrentNumberInSequence',
      'desc' => [
        'en' => 'Current Number In Sequence',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171248
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CurrentNumberInSequence',
      'desc' => [
        'en' => 'Current Number In Sequence',
      ],
    ],
  ];

}
