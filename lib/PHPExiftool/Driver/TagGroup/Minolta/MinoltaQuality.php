<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinoltaQuality extends AbstractTagGroup
{

  protected string $id = 'Minolta:MinoltaQuality';

  protected string $name = 'MinoltaQuality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Minolta Quality',
    'fr' => 'Qualité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177528
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:MinoltaQuality',
      'desc' => [
        'en' => 'Minolta Quality',
        'fr' => 'Qualité',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178746
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:MinoltaQuality',
      'desc' => [
        'en' => 'Minolta Quality',
        'fr' => 'Qualité',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179726
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:MinoltaQuality',
      'desc' => [
        'en' => 'Minolta Quality',
        'fr' => 'Qualité',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183912
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:MinoltaQuality',
      'desc' => [
        'en' => 'Minolta Quality',
        'fr' => 'Qualité',
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::Main
       * line : 183954
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:MinoltaQuality',
      'desc' => [
        'en' => 'Minolta Quality',
        'fr' => 'Qualité',
      ],
    ],
  ];

}
