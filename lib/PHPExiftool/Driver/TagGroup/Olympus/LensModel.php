<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensModel extends AbstractTagGroup
{

  protected string $id = 'Olympus:LensModel';

  protected string $name = 'LensModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Model',
    'fr' => 'Modèle d\'objectif',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 254782
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:LensModel',
      'desc' => [
        'en' => 'Lens Model',
        'fr' => 'Modèle d\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::prms
       * line : 263594
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Olympus::prms.Olympus:LensModel',
      'desc' => [
        'en' => 'Lens Model',
        'fr' => 'Modèle d\'objectif',
      ],
    ],
  ];

}
