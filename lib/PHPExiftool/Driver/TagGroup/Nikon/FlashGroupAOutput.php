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
class FlashGroupAOutput extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashGroupAOutput';

  protected string $name = 'FlashGroupAOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Group A Output',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 193166
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupAOutput',
      'desc' => [
        'en' => 'Flash Group A Output',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193726
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupAOutput',
      'desc' => [
        'en' => 'Flash Group A Output',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 194338
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupAOutput',
      'desc' => [
        'en' => 'Flash Group A Output',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194962
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupAOutput',
      'desc' => [
        'en' => 'Flash Group A Output',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195449
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupAOutput',
      'desc' => [
        'en' => 'Flash Group A Output',
      ],
    ],
  ];

}
