<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDateStamp extends AbstractTagGroup
{

  protected string $id = 'Sony:GPSDateStamp';

  protected string $name = 'GPSDateStamp';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Date Stamp',
    'fr' => 'Date GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394160
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:GPSDateStamp',
      'desc' => [
        'en' => 'GPS Date Stamp',
        'fr' => 'Date GPS',
      ],
    ],
  ];

}
