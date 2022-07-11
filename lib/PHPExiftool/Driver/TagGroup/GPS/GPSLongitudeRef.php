<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitudeRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSLongitudeRef';

  protected string $name = 'GPSLongitudeRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Longitude Ref',
    'fr' => 'Longitude est ou ouest',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132123
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSLongitudeRef',
      'desc' => [
        'en' => 'GPS Longitude Ref',
        'fr' => 'Longitude est ou ouest',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141731
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSLongitudeRef',
      'desc' => [
        'en' => 'GPS Longitude Ref',
        'fr' => 'Longitude est ou ouest',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203182
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSLongitudeRef',
      'desc' => [
        'en' => 'GPS Longitude Ref',
        'fr' => 'Longitude est ou ouest',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301508
       * type : string
       * writable : false
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSLongitudeRef',
      'desc' => [
        'en' => 'GPS Longitude Ref',
        'fr' => 'Longitude est ou ouest',
      ],
    ],
  ];

}
