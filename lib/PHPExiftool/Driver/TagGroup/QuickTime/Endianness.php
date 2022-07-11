<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Endianness extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Endianness';

  protected string $name = 'Endianness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Endianness',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ProtectionInfo
       * line : 324605
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ProtectionInfo.QuickTime:Endianness',
      'desc' => [
        'en' => 'Endianness',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Wave
       * line : 326637
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Wave.QuickTime:Endianness',
      'desc' => [
        'en' => 'Endianness',
      ],
    ],
  ];

}
