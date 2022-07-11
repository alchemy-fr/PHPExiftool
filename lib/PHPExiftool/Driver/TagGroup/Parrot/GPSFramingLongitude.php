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
class GPSFramingLongitude extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSFramingLongitude';

  protected string $name = 'GPSFramingLongitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Framing Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::Automation
       * line : 282195
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::Automation.Parrot:GPSFramingLongitude',
      'desc' => [
        'en' => 'GPS Framing Longitude',
      ],
    ],
  ];

}
