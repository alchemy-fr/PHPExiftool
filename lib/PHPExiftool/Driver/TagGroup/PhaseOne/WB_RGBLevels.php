<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevels extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:WB_RGBLevels';

  protected string $name = 'WB_RGBLevels';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels',
    'fr' => 'Niveaux BB RVB',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303569
       * type : float
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
  ];

}
