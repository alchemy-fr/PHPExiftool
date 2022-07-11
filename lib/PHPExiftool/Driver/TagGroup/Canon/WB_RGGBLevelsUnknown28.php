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
class WB_RGGBLevelsUnknown28 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown28';

  protected string $name = 'WB_RGGBLevelsUnknown28';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Unknown 28',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60264
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown28',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 28',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62555
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown28',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 28',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData9
       * line : 63037
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown28',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 28',
      ],
    ],
  ];

}
