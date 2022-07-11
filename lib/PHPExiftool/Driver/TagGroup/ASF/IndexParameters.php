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
class IndexParameters extends AbstractTagGroup
{

  protected string $id = 'ASF:IndexParameters';

  protected string $name = 'IndexParameters';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Index Parameters',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::HeaderExtension
       * line : 1861
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::HeaderExtension.ASF:IndexParameters',
      'desc' => [
        'en' => 'Index Parameters',
      ],
    ],
  ];

}
