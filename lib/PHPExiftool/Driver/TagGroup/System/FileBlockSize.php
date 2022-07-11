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
class FileBlockSize extends AbstractTagGroup
{

  protected string $id = 'System:FileBlockSize';

  protected string $name = 'FileBlockSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Block Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121583
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.System:FileBlockSize',
      'desc' => [
        'en' => 'File Block Size',
      ],
    ],
  ];

}
