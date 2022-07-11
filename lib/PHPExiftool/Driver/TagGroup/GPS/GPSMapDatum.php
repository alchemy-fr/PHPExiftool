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
class GPSMapDatum extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSMapDatum';

  protected string $name = 'GPSMapDatum';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Map Datum',
    'fr' => 'Données de surveillance géodésique utilisées',
  ];

  protected int $count = 7;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132664
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142254
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203430
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301801
       * type : string
       * writable : false
       * count : 7
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
  ];

}
