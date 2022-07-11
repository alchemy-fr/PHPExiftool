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
class ElementaryStreamTrack extends AbstractTagGroup
{

  protected string $id = 'Track#:ElementaryStreamTrack';

  protected string $name = 'ElementaryStreamTrack';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Elementary Stream Track',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TrackRef
       * line : 325474
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::TrackRef.Track#:ElementaryStreamTrack',
      'desc' => [
        'en' => 'Elementary Stream Track',
      ],
    ],
  ];

}
