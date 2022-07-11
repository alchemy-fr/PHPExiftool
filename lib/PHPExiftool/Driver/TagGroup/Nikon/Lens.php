<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Lens extends AbstractTagGroup
{

  protected string $id = 'Nikon:Lens';

  protected string $name = 'Lens';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens',
    'fr' => 'Objectif',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197552
       * type : rational64u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:Lens',
      'desc' => [
        'en' => 'Lens',
        'fr' => 'Objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203747
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:Lens',
      'desc' => [
        'en' => 'Lens',
        'fr' => 'Objectif',
      ],
    ],
  ];

}
