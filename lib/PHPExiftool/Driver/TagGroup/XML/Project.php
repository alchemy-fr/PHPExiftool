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
class Project extends AbstractTagGroup
{

  protected string $id = 'XML:Project';

  protected string $name = 'Project';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Project',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : OOXML::Main
       * line : 249558
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OOXML::Main.XML:Project',
      'desc' => [
        'en' => 'Project',
      ],
    ],
  ];

}
