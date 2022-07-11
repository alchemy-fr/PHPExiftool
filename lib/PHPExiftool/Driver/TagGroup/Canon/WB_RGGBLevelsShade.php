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
class WB_RGGBLevelsShade extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsShade';

  protected string $name = 'WB_RGGBLevelsShade';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Shade',
    'fr' => 'Niveaux BB RVVB ombre',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58878
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59210
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59488
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59744
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60014
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60541
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60788
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61133
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61507
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61895
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62316
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62787
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
  ];

}
