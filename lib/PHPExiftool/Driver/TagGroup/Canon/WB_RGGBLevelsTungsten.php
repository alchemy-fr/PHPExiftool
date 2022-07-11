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
class WB_RGGBLevelsTungsten extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsTungsten';

  protected string $name = 'WB_RGGBLevelsTungsten';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Tungsten',
    'fr' => 'Niveaux BB RVVB tungstène',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58894
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59240
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59518
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59774
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60044
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60571
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60818
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61163
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61537
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61925
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62346
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62817
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsTungsten',
      'desc' => [
        'en' => 'WB RGGB Levels Tungsten',
        'fr' => 'Niveaux BB RVVB tungstène',
      ],
    ],
  ];

}
