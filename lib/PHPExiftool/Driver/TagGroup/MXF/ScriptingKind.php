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
class ScriptingKind extends AbstractTagGroup
{

  protected string $id = 'MXF:ScriptingKind';

  protected string $name = 'ScriptingKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scripting Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171483
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ScriptingKind',
      'desc' => [
        'en' => 'Scripting Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171486
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ScriptingKind',
      'desc' => [
        'en' => 'Scripting Kind',
      ],
    ],
  ];

}
