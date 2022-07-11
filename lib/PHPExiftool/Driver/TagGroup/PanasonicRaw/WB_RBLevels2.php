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
class WB_RBLevels2 extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:WB_RBLevels2';

  protected string $name = 'WB_RBLevels2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RB Levels 2',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::WBInfo
       * line : 281290
       * type : int16u
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'PanasonicRaw::WBInfo.PanasonicRaw:WB_RBLevels2',
      'desc' => [
        'en' => 'WB RB Levels 2',
      ],
    ],
  ];

}
