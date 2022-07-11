<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PanasonicRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NumWBEntries extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:NumWBEntries';

  protected string $name = 'NumWBEntries';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Num WB Entries',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::WBInfo
       * line : 281142
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::WBInfo.PanasonicRaw:NumWBEntries',
      'desc' => [
        'en' => 'Num WB Entries',
      ],
    ],
    1 => [
      /**
       * table_name : PanasonicRaw::WBInfo2
       * line : 281667
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::WBInfo2.PanasonicRaw:NumWBEntries',
      'desc' => [
        'en' => 'Num WB Entries',
      ],
    ],
  ];

}
