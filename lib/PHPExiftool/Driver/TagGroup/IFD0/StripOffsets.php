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
class StripOffsets extends AbstractTagGroup
{

  protected string $id = 'IFD0:StripOffsets';

  protected string $name = 'StripOffsets';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Strip Offsets',
    'fr' => 'Emplacement des données image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280888
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::Main.IFD0:StripOffsets',
      'desc' => [
        'en' => 'Strip Offsets',
        'fr' => 'Emplacement des données image',
      ],
    ],
  ];

}
