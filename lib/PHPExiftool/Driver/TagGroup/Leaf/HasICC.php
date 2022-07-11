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
class HasICC extends AbstractTagGroup
{

  protected string $id = 'Leaf:HasICC';

  protected string $name = 'HasICC';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Has ICC',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ColorSetup
       * line : 162152
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ColorSetup.Leaf:HasICC',
      'desc' => [
        'en' => 'Has ICC',
      ],
    ],
  ];

}
