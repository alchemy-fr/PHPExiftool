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
class MediaIndex extends AbstractTagGroup
{

  protected string $id = 'ASF:MediaIndex';

  protected string $name = 'MediaIndex';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Media Index',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::Main
       * line : 1892
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::Main.ASF:MediaIndex',
      'desc' => [
        'en' => 'Media Index',
      ],
    ],
  ];

}
