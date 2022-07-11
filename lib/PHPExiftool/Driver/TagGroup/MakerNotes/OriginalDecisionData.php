<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MakerNotes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalDecisionData extends AbstractTagGroup
{

  protected string $id = 'MakerNotes:OriginalDecisionData';

  protected string $name = 'OriginalDecisionData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Original Decision Data',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90189
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Composite.MakerNotes:OriginalDecisionData',
      'desc' => [
        'en' => 'Original Decision Data',
      ],
    ],
  ];

}
