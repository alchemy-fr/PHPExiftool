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
class CFAPattern extends AbstractTagGroup
{

  protected string $id = 'Composite:CFAPattern';

  protected string $name = 'CFAPattern';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CFA Pattern',
    'fr' => 'Matrice de filtrage couleur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90291
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:CFAPattern',
      'desc' => [
        'en' => 'CFA Pattern',
        'fr' => 'Matrice de filtrage couleur',
      ],
    ],
  ];

}
