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
class RecipeStartingPage extends AbstractTagGroup
{

  protected string $id = 'XMP-prm:RecipeStartingPage';

  protected string $name = 'RecipeStartingPage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Recipe Starting Page',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prm
       * line : 411592
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::prm.XMP-prm:RecipeStartingPage',
      'desc' => [
        'en' => 'Recipe Starting Page',
      ],
    ],
  ];

}
