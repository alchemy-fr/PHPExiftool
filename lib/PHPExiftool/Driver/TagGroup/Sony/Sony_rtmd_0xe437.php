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
class Sony_rtmd_0xe437 extends AbstractTagGroup
{

  protected string $id = 'Sony:Sony_rtmd_0xe437';

  protected string $name = 'Sony_rtmd_0xe437';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sony rtmd 0xe437',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394302
       * type : int32s
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Sony::rtmd.Sony:Sony_rtmd_0xe437',
      'desc' => [
        'en' => 'Sony rtmd 0xe437',
      ],
    ],
  ];

}
