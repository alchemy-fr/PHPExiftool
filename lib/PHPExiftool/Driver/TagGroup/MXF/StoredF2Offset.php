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
class StoredF2Offset extends AbstractTagGroup
{

  protected string $id = 'MXF:StoredF2Offset';

  protected string $name = 'StoredF2Offset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stored F2 Offset',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171527
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:StoredF2Offset',
      'desc' => [
        'en' => 'Stored F2 Offset',
      ],
    ],
  ];

}
