<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sony_rtmd_0x8001 extends AbstractTagGroup
{

  protected string $id = 'Sony:Sony_rtmd_0x8001';

  protected string $name = 'Sony_rtmd_0x8001';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sony rtmd 0x8001',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 393774
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Sony::rtmd.Sony:Sony_rtmd_0x8001',
      'desc' => [
        'en' => 'Sony rtmd 0x8001',
      ],
    ],
  ];

}
