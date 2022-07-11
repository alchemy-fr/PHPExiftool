<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IntergraphMatrix extends AbstractTagGroup
{

  protected string $id = 'IFD0:IntergraphMatrix';

  protected string $name = 'IntergraphMatrix';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Intergraph Matrix',
    'fr' => 'Tag de matrice intergraphe',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113510
       * type : double
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:IntergraphMatrix',
      'desc' => [
        'en' => 'Intergraph Matrix',
        'fr' => 'Tag de matrice intergraphe',
      ],
    ],
  ];

}
