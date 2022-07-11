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
class VideoSize extends AbstractTagGroup
{

  protected string $id = 'QuickTime:VideoSize';

  protected string $name = 'VideoSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Size',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::VideoProf
       * line : 326624
       * type : int16u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'QuickTime::VideoProf.QuickTime:VideoSize',
      'desc' => [
        'en' => 'Video Size',
      ],
    ],
  ];

}
