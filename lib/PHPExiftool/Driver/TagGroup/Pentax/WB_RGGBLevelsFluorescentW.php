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
class WB_RGGBLevelsFluorescentW extends AbstractTagGroup
{

  protected string $id = 'Pentax:WB_RGGBLevelsFluorescentW';

  protected string $name = 'WB_RGGBLevelsFluorescentW';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Fluorescent W',
    'fr' => 'Niveaux BB RVVB fluo W',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301134
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:WB_RGGBLevelsFluorescentW',
      'desc' => [
        'en' => 'WB RGGB Levels Fluorescent W',
        'fr' => 'Niveaux BB RVVB fluo W',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::WBLevels
       * line : 303435
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsFluorescentW',
      'desc' => [
        'en' => 'WB RGGB Levels Fluorescent W',
        'fr' => 'Niveaux BB RVVB fluo W',
      ],
    ],
  ];

}
