<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlackMaskTopBorder extends AbstractTagGroup
{

  protected string $id = 'Canon:BlackMaskTopBorder';

  protected string $name = 'BlackMaskTopBorder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Black Mask Top Border',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::SensorInfo
       * line : 70105
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::SensorInfo.Canon:BlackMaskTopBorder',
      'desc' => [
        'en' => 'Black Mask Top Border',
      ],
    ],
  ];

}
