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
class FileCreateDate extends AbstractTagGroup
{

  protected string $id = 'System:FileCreateDate';

  protected string $name = 'FileCreateDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Creation Date/Time',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121587
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Extra.System:FileCreateDate',
      'desc' => [
        'en' => 'File Creation Date/Time',
      ],
    ],
  ];

}
