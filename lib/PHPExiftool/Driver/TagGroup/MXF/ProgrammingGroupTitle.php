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
class ProgrammingGroupTitle extends AbstractTagGroup
{

  protected string $id = 'MXF:ProgrammingGroupTitle';

  protected string $name = 'ProgrammingGroupTitle';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Programming Group Title',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171384
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ProgrammingGroupTitle',
      'desc' => [
        'en' => 'Programming Group Title',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171388
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ProgrammingGroupTitle',
      'desc' => [
        'en' => 'Programming Group Title',
      ],
    ],
  ];

}
