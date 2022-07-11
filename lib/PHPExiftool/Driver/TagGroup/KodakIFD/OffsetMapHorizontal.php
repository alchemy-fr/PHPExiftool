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
class OffsetMapHorizontal extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:OffsetMapHorizontal';

  protected string $name = 'OffsetMapHorizontal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Offset Map Horizontal',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155253
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Kodak::IFD.KodakIFD:OffsetMapHorizontal',
      'desc' => [
        'en' => 'Offset Map Horizontal',
      ],
    ],
  ];

}
