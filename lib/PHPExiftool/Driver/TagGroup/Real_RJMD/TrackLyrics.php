<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RJMD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrackLyrics extends AbstractTagGroup
{

  protected string $id = 'Real-RJMD:TrackLyrics';

  protected string $name = 'TrackLyrics';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Track Lyrics',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Metadata
       * line : 330817
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::Metadata.Real-RJMD:TrackLyrics',
      'desc' => [
        'en' => 'Track Lyrics',
      ],
    ],
  ];

}
