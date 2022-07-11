<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevels extends AbstractTagGroup
{

  protected string $id = 'Leica:WB_RGBLevels';

  protected string $name = 'WB_RGBLevels';

  protected ?string $phpType = 'mixed';

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
       * table_name : Panasonic::Leica3
       * line : 275106
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica3.Leica:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica5
       * line : 275236
       * type : rational64u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica5.Leica:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279696
       * type : rational64u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Panasonic::Subdir.Leica:WB_RGBLevels',
      'desc' => [
        'en' => 'WB RGB Levels',
        'fr' => 'Niveaux BB RVB',
      ],
    ],
  ];

}
