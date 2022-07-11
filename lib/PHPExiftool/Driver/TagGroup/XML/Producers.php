<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Producers extends AbstractTagGroup
{

  protected string $id = 'XML:Producers';

  protected string $name = 'Producers';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Producers',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLIST::Main
       * line : 265542
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'PLIST::Main.XML:Producers',
      'desc' => [
        'en' => 'Producers',
      ],
    ],
  ];

}
