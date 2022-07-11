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
class WB_RGGBLevelsFlash extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsFlash';

  protected string $name = 'WB_RGGBLevelsFlash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Flash',
    'fr' => 'Niveaux BB RVVB flash',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58908
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorCoefs
       * line : 59279
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorCoefs2
       * line : 59557
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59802
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60083
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60610
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::ColorData2
       * line : 60857
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61202
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    8 => [
      /**
       * table_name : Canon::ColorData6
       * line : 61576
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    9 => [
      /**
       * table_name : Canon::ColorData7
       * line : 61964
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    10 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62385
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
    11 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62856
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGGB Levels Flash',
        'fr' => 'Niveaux BB RVVB flash',
      ],
    ],
  ];

}
