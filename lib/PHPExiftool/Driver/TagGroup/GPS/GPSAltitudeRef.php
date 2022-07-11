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
class GPSAltitudeRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSAltitudeRef';

  protected string $name = 'GPSAltitudeRef';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Altitude Ref',
    'fr' => 'Référence d\'altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132197
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141805
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203256
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301582
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSAltitudeRef',
      'desc' => [
        'en' => 'GPS Altitude Ref',
        'fr' => 'Référence d\'altitude',
      ],
    ],
  ];

}
