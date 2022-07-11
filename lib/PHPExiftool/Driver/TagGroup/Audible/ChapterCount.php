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
class ChapterCount extends AbstractTagGroup
{

  protected string $id = 'Audible:ChapterCount';

  protected string $name = 'ChapterCount';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chapter Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::Main
       * line : 2979
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::Main.Audible:ChapterCount',
      'desc' => [
        'en' => 'Chapter Count',
      ],
    ],
  ];

}
