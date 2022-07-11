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
class OffsetToMetadata extends AbstractTagGroup
{

  protected string $id = 'MXF:OffsetToMetadata';

  protected string $name = 'OffsetToMetadata';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Offset To Metadata',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171215
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OffsetToMetadata',
      'desc' => [
        'en' => 'Offset To Metadata',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171218
       * type : int64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OffsetToMetadata',
      'desc' => [
        'en' => 'Offset To Metadata',
      ],
    ],
  ];

}
