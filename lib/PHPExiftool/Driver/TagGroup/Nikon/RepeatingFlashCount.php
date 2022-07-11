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
class RepeatingFlashCount extends AbstractTagGroup
{

  protected string $id = 'Nikon:RepeatingFlashCount';

  protected string $name = 'RepeatingFlashCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Repeating Flash Count',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192921
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193425
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193997
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194601
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195148
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:RepeatingFlashCount',
      'desc' => [
        'en' => 'Repeating Flash Count',
      ],
    ],
  ];

}
