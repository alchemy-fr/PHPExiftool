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
class Unknown03 extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Unknown03';

  protected string $name = 'Unknown03';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown 03',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Stream
       * line : 325272
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::Stream.QuickTime:Unknown03',
      'desc' => [
        'en' => 'Unknown 03',
      ],
    ],
  ];

}
