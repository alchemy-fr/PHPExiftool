<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsShade extends AbstractTagGroup
{

  protected string $id = 'Sigma:WB_RGBLevelsShade';

  protected string $name = 'WB_RGBLevelsShade';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels Shade',
    'fr' => 'Niveaux BB RVB ombre',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::WBSettings
       * line : 339576
       * type : float
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sigma::WBSettings.Sigma:WB_RGBLevelsShade',
      'desc' => [
        'en' => 'WB RGB Levels Shade',
        'fr' => 'Niveaux BB RVB ombre',
      ],
    ],
  ];

}
