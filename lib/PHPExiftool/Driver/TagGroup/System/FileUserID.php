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
class FileUserID extends AbstractTagGroup
{

  protected string $id = 'System:FileUserID';

  protected string $name = 'FileUserID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File User ID',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121710
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Extra.System:FileUserID',
      'desc' => [
        'en' => 'File User ID',
      ],
    ],
  ];

}
