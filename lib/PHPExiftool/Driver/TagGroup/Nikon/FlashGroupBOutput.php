<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashGroupBOutput extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashGroupBOutput';

  protected string $name = 'FlashGroupBOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Group B Output',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 193178
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupBOutput',
      'desc' => [
        'en' => 'Flash Group B Output',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193738
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupBOutput',
      'desc' => [
        'en' => 'Flash Group B Output',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 194350
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupBOutput',
      'desc' => [
        'en' => 'Flash Group B Output',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194974
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupBOutput',
      'desc' => [
        'en' => 'Flash Group B Output',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195461
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupBOutput',
      'desc' => [
        'en' => 'Flash Group B Output',
      ],
    ],
  ];

}
