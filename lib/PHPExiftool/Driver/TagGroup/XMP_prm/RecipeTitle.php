<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecipeTitle extends AbstractTagGroup
{

  protected string $id = 'XMP-prm:RecipeTitle';

  protected string $name = 'RecipeTitle';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Recipe Title',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prm
       * line : 411595
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::prm.XMP-prm:RecipeTitle',
      'desc' => [
        'en' => 'Recipe Title',
      ],
    ],
  ];

}
