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
class TrackCreateDate extends AbstractTagGroup
{

  protected string $id = 'Track#:TrackCreateDate';

  protected string $name = 'TrackCreateDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Track Create Date',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TrackHeader
       * line : 325401
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'QuickTime::TrackHeader.Track#:TrackCreateDate',
      'desc' => [
        'en' => 'Track Create Date',
      ],
    ],
  ];

}
