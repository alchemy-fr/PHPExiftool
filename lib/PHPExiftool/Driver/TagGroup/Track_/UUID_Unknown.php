<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Track_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UUID_Unknown extends AbstractTagGroup
{

  protected string $id = 'Track#:UUID-Unknown';

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
       * table_name : QuickTime::Track
       * line : 325375
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::Track.Track#:UUID-Unknown',
      'desc' => [
        'en' => 'UUID-Unknown',
      ],
    ],
  ];

}
