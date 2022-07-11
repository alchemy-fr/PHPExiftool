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
class WB_RBLevelsShade extends AbstractTagGroup
{

  protected string $id = 'Nikon:WB_RBLevelsShade';

  protected string $name = 'WB_RBLevelsShade';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RB Levels Shade',
    'fr' => 'Niveaux BB RB ombre',
  ];

  protected int $count = 14;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalanceA
       * line : 192347
       * type : int16u
       * writable : true
       * count : 14
       * flags : Permanent,Unsafe
       */
      'id' => 'Nikon::ColorBalanceA.Nikon:WB_RBLevelsShade',
      'desc' => [
        'en' => 'WB RB Levels Shade',
        'fr' => 'Niveaux BB RB ombre',
      ],
    ],
  ];

}
