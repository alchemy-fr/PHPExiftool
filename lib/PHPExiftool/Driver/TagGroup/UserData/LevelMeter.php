<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LevelMeter extends AbstractTagGroup
{

  protected string $id = 'UserData:LevelMeter';

  protected string $name = 'LevelMeter';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Level Meter',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325615
       * type : rational64s
       * writable : true
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::UserData.UserData:LevelMeter',
      'desc' => [
        'en' => 'Level Meter',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325870
       * type : rational64s
       * writable : true
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::UserData.UserData:LevelMeter',
      'desc' => [
        'en' => 'Level Meter',
      ],
    ],
  ];

}
