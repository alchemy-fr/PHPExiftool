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
class ExtenderStatus extends AbstractTagGroup
{

  protected string $id = 'Composite:ExtenderStatus';

  protected string $name = 'ExtenderStatus';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Extender Status',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 92959
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:ExtenderStatus',
      'desc' => [
        'en' => 'Extender Status',
      ],
    ],
  ];

}
