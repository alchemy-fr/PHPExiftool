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
class VideoFrameRate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:VideoFrameRate';

  protected string $name = 'VideoFrameRate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Frame Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::SampleTable
       * line : 324790
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::SampleTable.QuickTime:VideoFrameRate',
      'desc' => [
        'en' => 'Video Frame Rate',
      ],
    ],
  ];

}
