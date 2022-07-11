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
class XTransLayout extends AbstractTagGroup
{

  protected string $id = 'RAF:XTransLayout';

  protected string $name = 'XTransLayout';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X-Trans Layout',
  ];

  protected int $count = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAF
       * line : 131432
       * type : int8u
       * writable : false
       * count : 36
       * flags : 
       */
      'id' => 'FujiFilm::RAF.RAF:XTransLayout',
      'desc' => [
        'en' => 'X-Trans Layout',
      ],
    ],
  ];

}
