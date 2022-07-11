<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDataByteOrder extends AbstractTagGroup
{

  protected string $id = 'Samsung:RawDataByteOrder';

  protected string $name = 'RawDataByteOrder';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Data Byte Order',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335576
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:RawDataByteOrder',
      'desc' => [
        'en' => 'Raw Data Byte Order',
      ],
    ],
  ];

}
