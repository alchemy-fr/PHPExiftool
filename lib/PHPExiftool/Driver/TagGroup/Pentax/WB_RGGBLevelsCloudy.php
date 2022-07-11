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
class WB_RGGBLevelsCloudy extends AbstractTagGroup
{

  protected string $id = 'Pentax:WB_RGGBLevelsCloudy';

  protected string $name = 'WB_RGGBLevelsCloudy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Cloudy',
    'fr' => 'Niveaux BB RVVB nuageux',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301102
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::WBLevels
       * line : 303403
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsCloudy',
      'desc' => [
        'en' => 'WB RGGB Levels Cloudy',
        'fr' => 'Niveaux BB RVVB nuageux',
      ],
    ],
  ];

}
