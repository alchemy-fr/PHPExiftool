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
class GPSVelocityEast extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GPSVelocityEast';

  protected string $name = 'GPSVelocityEast';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Velocity East',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm6
       * line : 326880
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm6.QuickTime:GPSVelocityEast',
      'desc' => [
        'en' => 'GPS Velocity East',
      ],
    ],
  ];

}
