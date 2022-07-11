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
class WB_RGGBLevelsUnknown21 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsUnknown21';

  protected string $name = 'WB_RGGBLevelsUnknown21';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Unknown 21',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60208
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown21',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 21',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60669
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown21',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 21',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62499
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown21',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 21',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData9
       * line : 62981
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown21',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown 21',
      ],
    ],
  ];

}
