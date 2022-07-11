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
class TapeShellKind extends AbstractTagGroup
{

  protected string $id = 'MXF:TapeShellKind';

  protected string $name = 'TapeShellKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tape Shell Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169483
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TapeShellKind',
      'desc' => [
        'en' => 'Tape Shell Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169486
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TapeShellKind',
      'desc' => [
        'en' => 'Tape Shell Kind',
      ],
    ],
  ];

}
