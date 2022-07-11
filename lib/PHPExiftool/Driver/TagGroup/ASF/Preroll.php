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
class Preroll extends AbstractTagGroup
{

  protected string $id = 'ASF:Preroll';

  protected string $name = 'Preroll';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preroll',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::FileProperties
       * line : 1755
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::FileProperties.ASF:Preroll',
      'desc' => [
        'en' => 'Preroll',
      ],
    ],
  ];

}
