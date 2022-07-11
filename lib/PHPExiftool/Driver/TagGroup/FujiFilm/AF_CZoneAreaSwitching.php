<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AF_CZoneAreaSwitching extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:AF-CZoneAreaSwitching';

  protected string $name = 'AF-CZoneAreaSwitching';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF-C Zone Area Switching',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::AFCSettings
       * line : 128667
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::AFCSettings.FujiFilm:AF-CZoneAreaSwitching',
      'desc' => [
        'en' => 'AF-C Zone Area Switching',
      ],
    ],
  ];

}
