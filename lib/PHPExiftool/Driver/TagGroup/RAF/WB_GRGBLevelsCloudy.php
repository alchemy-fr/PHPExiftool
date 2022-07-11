<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RAF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_GRGBLevelsCloudy extends AbstractTagGroup
{

  protected string $id = 'RAF:WB_GRGBLevelsCloudy';

  protected string $name = 'WB_GRGBLevelsCloudy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB GRGB Levels Cloudy',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAF
       * line : 131441
       * type : int16u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'FujiFilm::RAF.RAF:WB_GRGBLevelsCloudy',
      'desc' => [
        'en' => 'WB GRGB Levels Cloudy',
      ],
    ],
  ];

}
