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
class MetadataItemName extends AbstractTagGroup
{

  protected string $id = 'MXF:MetadataItemName';

  protected string $name = 'MetadataItemName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Metadata Item Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169326
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MetadataItemName',
      'desc' => [
        'en' => 'Metadata Item Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172406
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MetadataItemName',
      'desc' => [
        'en' => 'Metadata Item Name',
      ],
    ],
  ];

}
