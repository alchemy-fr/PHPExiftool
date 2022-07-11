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
class WB_GRBGLevels extends AbstractTagGroup
{

  protected string $id = 'Nikon:WB_GRBGLevels';

  protected string $name = 'WB_GRBGLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB GRBG Levels',
    'fr' => 'Niveaux BB VRBV',
  ];

  protected int $count = 4;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalance4
       * line : 192303
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent,Unsafe
       */
      'id' => 'Nikon::ColorBalance4.Nikon:WB_GRBGLevels',
      'desc' => [
        'en' => 'WB GRBG Levels',
        'fr' => 'Niveaux BB VRBV',
      ],
    ],
  ];

}
