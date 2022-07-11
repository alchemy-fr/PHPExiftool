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
class PoseRollDegrees extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PoseRollDegrees';

  protected string $name = 'PoseRollDegrees';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pose Roll Degrees',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::prhd
       * line : 327075
       * type : fixed32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::prhd.QuickTime:PoseRollDegrees',
      'desc' => [
        'en' => 'Pose Roll Degrees',
      ],
    ],
  ];

}
