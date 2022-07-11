<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsShade extends AbstractTagGroup
{

  protected string $id = 'Pentax:WB_RGGBLevelsShade';

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
       * table_name : Pentax::Main
       * line : 301094
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::WBLevels
       * line : 303395
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsShade',
      'desc' => [
        'en' => 'WB RGGB Levels Shade',
        'fr' => 'Niveaux BB RVVB ombre',
      ],
    ],
  ];

}
