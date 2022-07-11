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
class GPSDestLongitude extends AbstractTagGroup
{

  protected string $id = 'Parrot:GPSDestLongitude';

  protected string $name = 'GPSDestLongitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Dest Longitude',
    'fr' => 'Longitude de destination',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::Automation
       * line : 282219
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::Automation.Parrot:GPSDestLongitude',
      'desc' => [
        'en' => 'GPS Dest Longitude',
        'fr' => 'Longitude de destination',
      ],
    ],
  ];

}
