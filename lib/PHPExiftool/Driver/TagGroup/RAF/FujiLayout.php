<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RAF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FujiLayout extends AbstractTagGroup
{

  protected string $id = 'RAF:FujiLayout';

  protected string $name = 'FujiLayout';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Fuji Layout',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAF
       * line : 131429
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FujiFilm::RAF.RAF:FujiLayout',
      'desc' => [
        'en' => 'Fuji Layout',
      ],
    ],
  ];

}
