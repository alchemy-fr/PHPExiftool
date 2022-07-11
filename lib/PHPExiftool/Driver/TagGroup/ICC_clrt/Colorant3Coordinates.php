<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_clrt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Colorant3Coordinates extends AbstractTagGroup
{

  protected string $id = 'ICC-clrt:Colorant3Coordinates';

  protected string $name = 'Colorant3Coordinates';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Colorant 3 Coordinates',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::ColorantTable
       * line : 143498
       * type : int16u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'ICC_Profile::ColorantTable.ICC-clrt:Colorant3Coordinates',
      'desc' => [
        'en' => 'Colorant 3 Coordinates',
      ],
    ],
  ];

}
