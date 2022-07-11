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
class UUID_Unknown extends AbstractTagGroup
{

  protected string $id = 'QuickTime:UUID-Unknown';

  protected string $name = 'UUID-Unknown';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'UUID-Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Main
       * line : 324221
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::Main.QuickTime:UUID-Unknown',
      'desc' => [
        'en' => 'UUID-Unknown',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Movie
       * line : 324407
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::Movie.QuickTime:UUID-Unknown',
      'desc' => [
        'en' => 'UUID-Unknown',
      ],
    ],
  ];

}
