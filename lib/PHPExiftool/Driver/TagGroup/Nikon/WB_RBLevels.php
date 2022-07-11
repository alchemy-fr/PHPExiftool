<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RBLevels extends AbstractTagGroup
{

  protected string $id = 'Nikon:WB_RBLevels';

  protected string $name = 'WB_RBLevels';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RB Levels',
    'fr' => 'Niveaux BB RB',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalanceA
       * line : 192313
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent,Unsafe
       */
      'id' => 'Nikon::ColorBalanceA.Nikon:WB_RBLevels',
      'desc' => [
        'en' => 'WB RB Levels',
        'fr' => 'Niveaux BB RB',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 197068
       * type : rational64u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:WB_RBLevels',
      'desc' => [
        'en' => 'WB RB Levels',
        'fr' => 'Niveaux BB RB',
      ],
    ],
  ];

}
