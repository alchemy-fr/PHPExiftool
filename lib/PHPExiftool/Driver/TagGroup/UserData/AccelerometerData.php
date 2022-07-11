<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AccelerometerData extends AbstractTagGroup
{

  protected string $id = 'UserData:AccelerometerData';

  protected string $name = 'AccelerometerData';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Accelerometer Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326054
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:AccelerometerData',
      'desc' => [
        'en' => 'Accelerometer Data',
      ],
    ],
  ];

}
