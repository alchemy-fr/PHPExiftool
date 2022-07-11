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
class TrackHeaderVersion extends AbstractTagGroup
{

  protected string $id = 'Track#:TrackHeaderVersion';

  protected string $name = 'TrackHeaderVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Track Header Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TrackHeader
       * line : 325397
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::TrackHeader.Track#:TrackHeaderVersion',
      'desc' => [
        'en' => 'Track Header Version',
      ],
    ],
  ];

}
