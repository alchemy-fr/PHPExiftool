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
class Colorant1Name extends AbstractTagGroup
{

  protected string $id = 'ICC-clrt:Colorant1Name';

  protected string $name = 'Colorant1Name';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Colorant 1 Name',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::ColorantTable
       * line : 143473
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'ICC_Profile::ColorantTable.ICC-clrt:Colorant1Name',
      'desc' => [
        'en' => 'Colorant 1 Name',
      ],
    ],
  ];

}
