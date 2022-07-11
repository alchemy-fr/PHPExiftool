<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoFrameRate extends AbstractTagGroup
{

  protected string $id = 'H264:VideoFrameRate';

  protected string $name = 'VideoFrameRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Frame Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::FrameInfo
       * line : 140685
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::FrameInfo.H264:VideoFrameRate',
      'desc' => [
        'en' => 'Video Frame Rate',
      ],
    ],
  ];

}
