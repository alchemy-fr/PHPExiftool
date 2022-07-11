<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ArchivedFileName extends AbstractTagGroup
{

  protected string $id = 'ZIP:ArchivedFileName';

  protected string $name = 'ArchivedFileName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Archived File Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::GZIP
       * line : 415142
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::GZIP.ZIP:ArchivedFileName',
      'desc' => [
        'en' => 'Archived File Name',
      ],
    ],
    1 => [
      /**
       * table_name : ZIP::RAR
       * line : 415384
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::RAR.ZIP:ArchivedFileName',
      'desc' => [
        'en' => 'Archived File Name',
      ],
    ],
  ];

}
