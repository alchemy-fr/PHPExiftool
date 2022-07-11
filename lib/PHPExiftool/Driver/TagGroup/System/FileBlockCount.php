<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\System;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileBlockCount extends AbstractTagGroup
{

  protected string $id = 'System:FileBlockCount';

  protected string $name = 'FileBlockCount';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Block Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121579
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.System:FileBlockCount',
      'desc' => [
        'en' => 'File Block Count',
      ],
    ],
  ];

}
