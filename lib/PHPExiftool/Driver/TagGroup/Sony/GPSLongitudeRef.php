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
class GPSLongitudeRef extends AbstractTagGroup
{

  protected string $id = 'Sony:GPSLongitudeRef';

  protected string $name = 'GPSLongitudeRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Longitude Ref',
    'fr' => 'Longitude est ou ouest',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 393941
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:GPSLongitudeRef',
      'desc' => [
        'en' => 'GPS Longitude Ref',
        'fr' => 'Longitude est ou ouest',
      ],
    ],
  ];

}
