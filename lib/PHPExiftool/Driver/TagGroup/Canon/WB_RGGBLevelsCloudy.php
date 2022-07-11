<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsCloudy extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsCloudy';

  protected string $name = 'WB_RGGBLevelsCloudy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Cloudy',
    'fr' => 'Niveaux BB RVVB nuageux',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58886
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59225
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59503
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59759
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60029
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60556
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60803
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61148
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61522
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61910
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62331
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62802
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
  ];

}
