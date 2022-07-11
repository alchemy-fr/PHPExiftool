<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorFilter extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:ColorFilter';

  protected string $name = 'ColorFilter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Filter',
    'fr' => 'Filtre de couleur',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187868
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorFilter',
      'desc' => [
        'en' => 'Color Filter',
        'fr' => 'Filtre de couleur',
      ],
    ],
    1 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 188076
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorFilter',
      'desc' => [
        'en' => 'Color Filter',
        'fr' => 'Filtre de couleur',
      ],
    ],
    2 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 188116
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorFilter',
      'desc' => [
        'en' => 'Color Filter',
        'fr' => 'Filtre de couleur',
      ],
    ],
  ];

}
