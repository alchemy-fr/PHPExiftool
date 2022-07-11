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
class WB_RGGBLevelsFluorescentN extends AbstractTagGroup
{

  protected string $id = 'Pentax:WB_RGGBLevelsFluorescentN';

  protected string $name = 'WB_RGGBLevelsFluorescentN';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Fluorescent N',
    'fr' => 'Niveaux BB RVVB fluo N',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301126
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:WB_RGGBLevelsFluorescentN',
      'desc' => [
        'en' => 'WB RGGB Levels Fluorescent N',
        'fr' => 'Niveaux BB RVVB fluo N',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::WBLevels
       * line : 303427
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsFluorescentN',
      'desc' => [
        'en' => 'WB RGGB Levels Fluorescent N',
        'fr' => 'Niveaux BB RVVB fluo N',
      ],
    ],
  ];

}
