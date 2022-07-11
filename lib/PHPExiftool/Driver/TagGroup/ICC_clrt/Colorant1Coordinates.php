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
class Colorant1Coordinates extends AbstractTagGroup
{

  protected string $id = 'ICC-clrt:Colorant1Coordinates';

  protected string $name = 'Colorant1Coordinates';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Colorant 1 Coordinates',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::ColorantTable
       * line : 143478
       * type : int16u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'ICC_Profile::ColorantTable.ICC-clrt:Colorant1Coordinates',
      'desc' => [
        'en' => 'Colorant 1 Coordinates',
      ],
    ],
  ];

}
