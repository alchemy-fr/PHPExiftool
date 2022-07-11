<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Categories extends AbstractTagGroup
{

  protected string $id = 'Canon:Categories';

  protected string $name = 'Categories';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Categories',
    'fr' => 'Catégories',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65785
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:Categories',
      'desc' => [
        'en' => 'Categories',
        'fr' => 'Catégories',
      ],
    ],
  ];

}
