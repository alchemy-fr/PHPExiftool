<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Linearized extends AbstractTagGroup
{

  protected string $id = 'PDF:Linearized';

  protected string $name = 'Linearized';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Linearized',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Main
       * line : 264622
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Main.PDF:Linearized',
      'desc' => [
        'en' => 'Linearized',
      ],
    ],
  ];

}
