<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PrintIM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintIMVersion extends AbstractTagGroup
{

  protected string $id = 'PrintIM:PrintIMVersion';

  protected string $name = 'PrintIMVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'PrintIM Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PrintIM::Main
       * line : 306464
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PrintIM::Main.PrintIM:PrintIMVersion',
      'desc' => [
        'en' => 'PrintIM Version',
      ],
    ],
  ];

}
