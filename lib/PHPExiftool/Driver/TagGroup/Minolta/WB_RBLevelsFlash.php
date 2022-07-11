<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RBLevelsFlash extends AbstractTagGroup
{

  protected string $id = 'Minolta:WB_RBLevelsFlash';

  protected string $name = 'WB_RBLevelsFlash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RB Levels Flash',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185909
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RBLevelsFlash',
      'desc' => [
        'en' => 'WB RB Levels Flash',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185936
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RBLevelsFlash',
      'desc' => [
        'en' => 'WB RB Levels Flash',
      ],
    ],
  ];

}
