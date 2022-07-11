<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinorVersion extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MinorVersion';

  protected string $name = 'MinorVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Minor Version',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::FileType
       * line : 313385
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::FileType.QuickTime:MinorVersion',
      'desc' => [
        'en' => 'Minor Version',
      ],
    ],
  ];

}
