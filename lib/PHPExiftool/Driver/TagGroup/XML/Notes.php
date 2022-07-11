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
class Notes extends AbstractTagGroup
{

  protected string $id = 'XML:Notes';

  protected string $name = 'Notes';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Notes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : OOXML::Main
       * line : 249530
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OOXML::Main.XML:Notes',
      'desc' => [
        'en' => 'Notes',
      ],
    ],
  ];

}
