<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevels extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:WB_RGGBLevels';

  protected string $name = 'WB_RGGBLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels',
    'fr' => 'Niveaux BB RVVB',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::WBG
       * line : 188156
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::WBG.MinoltaRaw:WB_RGGBLevels',
      'desc' => [
        'en' => 'WB RGGB Levels',
        'fr' => 'Niveaux BB RVVB',
      ],
    ],
  ];

}
