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
class WB_RBLevels4 extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:WB_RBLevels4';

  protected string $name = 'WB_RBLevels4';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RB Levels 4',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::WBInfo
       * line : 281438
       * type : int16u
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'PanasonicRaw::WBInfo.PanasonicRaw:WB_RBLevels4',
      'desc' => [
        'en' => 'WB RB Levels 4',
      ],
    ],
  ];

}
