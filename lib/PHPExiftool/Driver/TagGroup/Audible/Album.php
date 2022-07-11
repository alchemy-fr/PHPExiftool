<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Album extends AbstractTagGroup
{

  protected string $id = 'Audible:Album';

  protected string $name = 'Album';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Album',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::meta
       * line : 3053
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::meta.Audible:Album',
      'desc' => [
        'en' => 'Album',
      ],
    ],
  ];

}
