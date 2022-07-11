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
class FileGroupID extends AbstractTagGroup
{

  protected string $id = 'System:FileGroupID';

  protected string $name = 'FileGroupID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Group ID',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121601
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Extra.System:FileGroupID',
      'desc' => [
        'en' => 'File Group ID',
      ],
    ],
  ];

}
