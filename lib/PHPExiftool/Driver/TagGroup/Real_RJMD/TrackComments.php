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
class TrackComments extends AbstractTagGroup
{

  protected string $id = 'Real-RJMD:TrackComments';

  protected string $name = 'TrackComments';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Track Comments',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Metadata
       * line : 330813
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::Metadata.Real-RJMD:TrackComments',
      'desc' => [
        'en' => 'Track Comments',
      ],
    ],
  ];

}
