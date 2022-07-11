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
class RepeatingFlashRate extends AbstractTagGroup
{

  protected string $id = 'Nikon:RepeatingFlashRate';

  protected string $name = 'RepeatingFlashRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Repeating Flash Rate',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192913
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193417
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193989
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194593
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195140
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:RepeatingFlashRate',
      'desc' => [
        'en' => 'Repeating Flash Rate',
      ],
    ],
  ];

}
