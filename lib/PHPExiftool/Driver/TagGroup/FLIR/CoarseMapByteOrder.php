<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CoarseMapByteOrder extends AbstractTagGroup
{

  protected string $id = 'FLIR:CoarseMapByteOrder';

  protected string $name = 'CoarseMapByteOrder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Coarse Map Byte Order',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::CoarseData
       * line : 122729
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::CoarseData.FLIR:CoarseMapByteOrder',
      'desc' => [
        'en' => 'Coarse Map Byte Order',
      ],
    ],
  ];

}
