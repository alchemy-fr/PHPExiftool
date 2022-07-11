<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HasSBA extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:HasSBA';

  protected string $name = 'HasSBA';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Has SBA',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304167
       * type : undef
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:HasSBA',
      'desc' => [
        'en' => 'Has SBA',
      ],
    ],
  ];

}
