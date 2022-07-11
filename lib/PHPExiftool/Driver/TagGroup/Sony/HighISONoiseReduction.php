<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighISONoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Sony:HighISONoiseReduction';

  protected string $name = 'HighISONoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'High ISO Noise Reduction',
    'fr' => 'Réduction du bruit en haute sensibilité ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347925
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349356
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351046
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 354343
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360865
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388040
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
  ];

}
