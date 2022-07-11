<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Director extends AbstractTagGroup
{

  protected string $id = 'Vorbis:Director';

  protected string $name = 'Director';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Director',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Vorbis::Comments
       * line : 396125
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Vorbis::Comments.Vorbis:Director',
      'desc' => [
        'en' => 'Director',
      ],
    ],
  ];

}
