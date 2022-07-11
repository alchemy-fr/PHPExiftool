<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LinkerVersion extends AbstractTagGroup
{

  protected string $id = 'EXE:LinkerVersion';

  protected string $name = 'LinkerVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Linker Version',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::Main
       * line : 109211
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'EXE::Main.EXE:LinkerVersion',
      'desc' => [
        'en' => 'Linker Version',
      ],
    ],
  ];

}
