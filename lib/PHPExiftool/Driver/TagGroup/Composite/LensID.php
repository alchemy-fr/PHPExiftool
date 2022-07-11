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
class LensID extends AbstractTagGroup
{

  protected string $id = 'Composite:LensID';

  protected string $name = 'LensID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lens ID',
    'fr' => 'ID Lens',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90401
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
        'en' => 'Lens ID',
        'fr' => 'ID Lens',
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 90413
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
        'en' => 'Lens ID',
        'fr' => 'ID Lens',
      ],
    ],
    2 => [
      /**
       * table_name : Composite
       * line : 91135
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
        'en' => 'Lens ID',
        'fr' => 'ID Lens',
      ],
    ],
    3 => [
      /**
       * table_name : Composite
       * line : 94098
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
        'en' => 'Lens ID',
        'fr' => 'ID Lens',
      ],
    ],
    4 => [
      /**
       * table_name : Composite
       * line : 94885
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:LensID',
      'desc' => [
        'en' => 'Lens ID',
        'fr' => 'ID Lens',
      ],
    ],
  ];

}
