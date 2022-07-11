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
class VideoMaxFrameRate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:VideoMaxFrameRate';

  protected string $name = 'VideoMaxFrameRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Max Frame Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::VideoProf
       * line : 326621
       * type : fixed32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::VideoProf.QuickTime:VideoMaxFrameRate',
      'desc' => [
        'en' => 'Video Max Frame Rate',
      ],
    ],
  ];

}
