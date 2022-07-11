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
class ColumnResetOffsets extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:ColumnResetOffsets';

  protected string $name = 'ColumnResetOffsets';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Column Reset Offsets',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156495
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:ColumnResetOffsets',
      'desc' => [
        'en' => 'Column Reset Offsets',
      ],
    ],
  ];

}
