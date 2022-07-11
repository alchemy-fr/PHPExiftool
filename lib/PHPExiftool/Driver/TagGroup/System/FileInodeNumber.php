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
class FileInodeNumber extends AbstractTagGroup
{

  protected string $id = 'System:FileInodeNumber';

  protected string $name = 'FileInodeNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Inode Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121614
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.System:FileInodeNumber',
      'desc' => [
        'en' => 'File Inode Number',
      ],
    ],
  ];

}
