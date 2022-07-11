<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoFrameCount extends AbstractTagGroup
{

  protected string $id = 'RIFF:VideoFrameCount';

  protected string $name = 'VideoFrameCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Frame Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::StreamHeader
       * line : 329161
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::StreamHeader.RIFF:VideoFrameCount',
      'desc' => [
        'en' => 'Video Frame Count',
      ],
    ],
  ];

}
