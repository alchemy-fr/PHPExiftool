<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StripOffsets extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:StripOffsets';

  protected string $name = 'StripOffsets';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Strip Offsets',
    'fr' => 'Emplacement des données image',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303736
       * type : int32s
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:StripOffsets',
      'desc' => [
        'en' => 'Strip Offsets',
        'fr' => 'Emplacement des données image',
      ],
    ],
  ];

}
