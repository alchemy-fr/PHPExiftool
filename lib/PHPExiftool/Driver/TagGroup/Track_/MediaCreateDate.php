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
class MediaCreateDate extends AbstractTagGroup
{

  protected string $id = 'Track#:MediaCreateDate';

  protected string $name = 'MediaCreateDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Media Create Date',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MediaHeader
       * line : 324238
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'QuickTime::MediaHeader.Track#:MediaCreateDate',
      'desc' => [
        'en' => 'Media Create Date',
      ],
    ],
  ];

}
