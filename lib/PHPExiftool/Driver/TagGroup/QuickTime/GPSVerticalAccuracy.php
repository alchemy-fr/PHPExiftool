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
class GPSVerticalAccuracy extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GPSVerticalAccuracy';

  protected string $name = 'GPSVerticalAccuracy';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Vertical Accuracy',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm6
       * line : 326877
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm6.QuickTime:GPSVerticalAccuracy',
      'desc' => [
        'en' => 'GPS Vertical Accuracy',
      ],
    ],
  ];

}
