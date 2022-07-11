<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KDC_IFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsShade extends AbstractTagGroup
{

  protected string $id = 'KDC_IFD:WB_RGBLevelsShade';

  protected string $name = 'WB_RGBLevelsShade';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB RGB Levels Shade',
    'fr' => 'Niveaux BB RVB ombre',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::KDC_IFD
       * line : 157886
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::KDC_IFD.KDC_IFD:WB_RGBLevelsShade',
      'desc' => [
        'en' => 'WB RGB Levels Shade',
        'fr' => 'Niveaux BB RVB ombre',
      ],
    ],
  ];

}
