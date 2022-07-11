<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoCodecInfo extends AbstractTagGroup
{

  protected string $id = 'QuickTime:VideoCodecInfo';

  protected string $name = 'VideoCodecInfo';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Codec Info',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::VideoProf
       * line : 326590
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::VideoProf.QuickTime:VideoCodecInfo',
      'desc' => [
        'en' => 'Video Codec Info',
      ],
    ],
  ];

}
