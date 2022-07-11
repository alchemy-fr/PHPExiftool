<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighISONoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Canon:HighISONoiseReduction';

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
       * table_name : Canon::CameraInfo500D
       * line : 24599
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26901
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35606
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 52033
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::LightingOpt
       * line : 64344
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::LightingOpt.Canon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
  ];

}
