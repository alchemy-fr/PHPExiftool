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
class WB_RGGBLevelsCustom extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsCustom';

  protected string $name = 'WB_RGGBLevelsCustom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Custom',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorBalance
       * line : 58916
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsCustom',
      'desc' => [
        'en' => 'WB RGGB Levels Custom',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61247
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsCustom',
      'desc' => [
        'en' => 'WB RGGB Levels Custom',
      ],
    ],
  ];

}
