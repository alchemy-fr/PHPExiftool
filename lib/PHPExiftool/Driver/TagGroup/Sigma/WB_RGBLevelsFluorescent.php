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
class WB_RGBLevelsFluorescent extends AbstractTagGroup
{

  protected string $id = 'Sigma:WB_RGBLevelsFluorescent';

  protected string $name = 'WB_RGBLevelsFluorescent';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels Fluorescent',
    'fr' => 'Niveaux BB RVB fluorescent',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::WBSettings
       * line : 339588
       * type : float
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sigma::WBSettings.Sigma:WB_RGBLevelsFluorescent',
      'desc' => [
        'en' => 'WB RGB Levels Fluorescent',
        'fr' => 'Niveaux BB RVB fluorescent',
      ],
    ],
  ];

}
