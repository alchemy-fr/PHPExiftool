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
class VideoAvgFrameRate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:VideoAvgFrameRate';

  protected string $name = 'VideoAvgFrameRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Avg Frame Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::VideoProf
       * line : 326618
       * type : fixed32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::VideoProf.QuickTime:VideoAvgFrameRate',
      'desc' => [
        'en' => 'Video Avg Frame Rate',
      ],
    ],
  ];

}
