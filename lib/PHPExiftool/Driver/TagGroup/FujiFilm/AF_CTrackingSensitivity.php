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
class AF_CTrackingSensitivity extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:AF-CTrackingSensitivity';

  protected string $name = 'AF-CTrackingSensitivity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF-C Tracking Sensitivity',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::AFCSettings
       * line : 128661
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::AFCSettings.FujiFilm:AF-CTrackingSensitivity',
      'desc' => [
        'en' => 'AF-C Tracking Sensitivity',
      ],
    ],
  ];

}
