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
class CircleOfConfusion extends AbstractTagGroup
{

  protected string $id = 'Composite:CircleOfConfusion';

  protected string $name = 'CircleOfConfusion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Circle Of Confusion',
    'fr' => 'Cercle de confusion',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90309
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:CircleOfConfusion',
      'desc' => [
        'en' => 'Circle Of Confusion',
        'fr' => 'Cercle de confusion',
      ],
    ],
  ];

}
