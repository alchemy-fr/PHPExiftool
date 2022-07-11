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
class LookHeadName extends AbstractTagGroup
{

  protected string $id = 'Leaf:LookHeadName';

  protected string $name = 'LookHeadName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Look Head Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::LookHeader
       * line : 162206
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::LookHeader.Leaf:LookHeadName',
      'desc' => [
        'en' => 'Look Head Name',
      ],
    ],
  ];

}
