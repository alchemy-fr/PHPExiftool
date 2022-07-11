<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Data extends AbstractTagGroup
{

  protected string $id = 'ASF:Data';

  protected string $name = 'Data';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::Main
       * line : 1874
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::Main.ASF:Data',
      'desc' => [
        'en' => 'Data',
      ],
    ],
  ];

}
