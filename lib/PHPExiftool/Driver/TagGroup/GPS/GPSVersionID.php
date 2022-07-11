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
class GPSVersionID extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSVersionID';

  protected string $name = 'GPSVersionID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Version ID',
    'fr' => 'Version de tag GPS',
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132031
       * type : int8u
       * writable : true
       * count : 4
       * flags : Mandatory
       */
      'id' => 'GPS::Main.GPS:GPSVersionID',
      'desc' => [
        'en' => 'GPS Version ID',
        'fr' => 'Version de tag GPS',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141639
       * type : int8u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSVersionID',
      'desc' => [
        'en' => 'GPS Version ID',
        'fr' => 'Version de tag GPS',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203090
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSVersionID',
      'desc' => [
        'en' => 'GPS Version ID',
        'fr' => 'Version de tag GPS',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301416
       * type : undef
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSVersionID',
      'desc' => [
        'en' => 'GPS Version ID',
        'fr' => 'Version de tag GPS',
      ],
    ],
  ];

}
