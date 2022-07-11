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
class WB_RedLevelsFluorescent extends AbstractTagGroup
{

  protected string $id = 'Minolta:WB_RedLevelsFluorescent';

  protected string $name = 'WB_RedLevelsFluorescent';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Red Levels Fluorescent',
  ];

  protected int $count = 7;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185873
       * type : int16u
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RedLevelsFluorescent',
      'desc' => [
        'en' => 'WB Red Levels Fluorescent',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185940
       * type : int16u
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RedLevelsFluorescent',
      'desc' => [
        'en' => 'WB Red Levels Fluorescent',
      ],
    ],
  ];

}
