<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CondadoDayOffsets extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:CondadoDayOffsets';

  protected string $name = 'CondadoDayOffsets';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Condado Day Offsets',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157252
       * type : int16s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:CondadoDayOffsets',
      'desc' => [
        'en' => 'Condado Day Offsets',
      ],
    ],
  ];

}
