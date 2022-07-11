<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AssignedCategoryValue extends AbstractTagGroup
{

  protected string $id = 'MXF:AssignedCategoryValue';

  protected string $name = 'AssignedCategoryValue';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Assigned Category Value',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169284
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AssignedCategoryValue',
      'desc' => [
        'en' => 'Assigned Category Value',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169287
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AssignedCategoryValue',
      'desc' => [
        'en' => 'Assigned Category Value',
      ],
    ],
  ];

}
