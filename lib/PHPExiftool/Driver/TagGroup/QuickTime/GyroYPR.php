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
class GyroYPR extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GyroYPR';

  protected string $name = 'GyroYPR';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gyro YPR',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Gyro360Fly
       * line : 313706
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::Gyro360Fly.QuickTime:GyroYPR',
      'desc' => [
        'en' => 'Gyro YPR',
      ],
    ],
  ];

}
