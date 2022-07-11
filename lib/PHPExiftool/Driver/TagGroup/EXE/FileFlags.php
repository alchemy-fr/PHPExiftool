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
class FileFlags extends AbstractTagGroup
{

  protected string $id = 'EXE:FileFlags';

  protected string $name = 'FileFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Flags',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::PEVersion
       * line : 109932
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::PEVersion.EXE:FileFlags',
      'desc' => [
        'en' => 'File Flags',
      ],
    ],
  ];

}
