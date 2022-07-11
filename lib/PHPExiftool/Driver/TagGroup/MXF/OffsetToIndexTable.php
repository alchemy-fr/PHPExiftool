<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OffsetToIndexTable extends AbstractTagGroup
{

  protected string $id = 'MXF:OffsetToIndexTable';

  protected string $name = 'OffsetToIndexTable';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Offset To Index Table',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171221
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OffsetToIndexTable',
      'desc' => [
        'en' => 'Offset To Index Table',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171224
       * type : int64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OffsetToIndexTable',
      'desc' => [
        'en' => 'Offset To Index Table',
      ],
    ],
  ];

}
