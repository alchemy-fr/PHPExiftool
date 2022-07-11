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
class Sony_rtmd_0x8101 extends AbstractTagGroup
{

  protected string $id = 'Sony:Sony_rtmd_0x8101';

  protected string $name = 'Sony_rtmd_0x8101';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sony rtmd 0x8101',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 393792
       * type : int8u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Sony::rtmd.Sony:Sony_rtmd_0x8101',
      'desc' => [
        'en' => 'Sony rtmd 0x8101',
      ],
    ],
  ];

}
