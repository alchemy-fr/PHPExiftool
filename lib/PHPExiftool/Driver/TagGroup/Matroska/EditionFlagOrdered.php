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
class EditionFlagOrdered extends AbstractTagGroup
{

  protected string $id = 'Matroska:EditionFlagOrdered';

  protected string $name = 'EditionFlagOrdered';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Edition Flag Ordered',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173875
       * type : unsigned
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Matroska::Main.Matroska:EditionFlagOrdered',
      'desc' => [
        'en' => 'Edition Flag Ordered',
      ],
    ],
  ];

}
