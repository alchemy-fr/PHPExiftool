<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrackNumber extends AbstractTagGroup
{

  protected string $id = 'Vorbis:TrackNumber';

  protected string $name = 'TrackNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Track Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Vorbis::Comments
       * line : 396235
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Vorbis::Comments.Vorbis:TrackNumber',
      'desc' => [
        'en' => 'Track Number',
      ],
    ],
  ];

}
