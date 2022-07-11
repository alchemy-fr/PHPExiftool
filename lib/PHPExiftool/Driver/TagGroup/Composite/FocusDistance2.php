<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusDistance2 extends AbstractTagGroup
{

  protected string $id = 'Composite:FocusDistance2';

  protected string $name = 'FocusDistance2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focus Distance 2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 94165
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:FocusDistance2',
      'desc' => [
        'en' => 'Focus Distance 2',
      ],
    ],
  ];

}
