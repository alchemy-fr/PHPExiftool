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
class WB_RGGBLevelsCustom2 extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_RGGBLevelsCustom2';

  protected string $name = 'WB_RGGBLevelsCustom2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Custom 2',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData1
       * line : 59828
       * type : int16s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsCustom2',
      'desc' => [
        'en' => 'WB RGGB Levels Custom 2',
      ],
    ],
  ];

}
