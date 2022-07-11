<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TagBinary extends AbstractTagGroup
{

  protected string $id = 'Matroska:TagBinary';

  protected string $name = 'TagBinary';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tag Binary',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173843
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Matroska::Main.Matroska:TagBinary',
      'desc' => [
        'en' => 'Tag Binary',
      ],
    ],
  ];

}
