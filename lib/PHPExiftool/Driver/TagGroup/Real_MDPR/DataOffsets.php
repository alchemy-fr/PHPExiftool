<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DataOffsets extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:DataOffsets';

  protected string $name = 'DataOffsets';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Data Offsets',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::MediaProps
       * line : 330785
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::MediaProps.Real-MDPR:DataOffsets',
      'desc' => [
        'en' => 'Data Offsets',
      ],
    ],
  ];

}
