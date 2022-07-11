<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSTargetLongitude extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSTargetLongitude';

  protected string $name = 'GPSTargetLongitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Target Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::FollowMe
       * line : 282311
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::FollowMe.Parrot:GPSTargetLongitude',
      'desc' => [
        'en' => 'GPS Target Longitude',
      ],
    ],
  ];

}
