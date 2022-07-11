<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LookHeadVersion extends AbstractTagGroup
{

  protected string $id = 'Leaf:LookHeadVersion';

  protected string $name = 'LookHeadVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Look Head Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::LookHeader
       * line : 162212
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::LookHeader.Leaf:LookHeadVersion',
      'desc' => [
        'en' => 'Look Head Version',
      ],
    ],
  ];

}
