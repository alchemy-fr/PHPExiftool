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
class WB_RGBLevels extends AbstractTagGroup
{

  protected string $id = 'Composite:WB_RGBLevels';

  protected string $name = 'WB_RGBLevels';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB RGB Levels',
    'fr' => 'Niveaux BB RVB',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90729
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    1 => [
      /**
       * table_name : Composite
       * line : 90736
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
  ];

}
