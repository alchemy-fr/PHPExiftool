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
class AutoLightingOptimizer extends AbstractTagGroup
{

  protected string $id = 'Canon:AutoLightingOptimizer';

  protected string $name = 'AutoLightingOptimizer';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auto Lighting Optimizer',
    'fr' => 'Correction auto de luminosité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 24664
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:AutoLightingOptimizer',
      'desc' => [
        'en' => 'Auto Lighting Optimizer',
        'fr' => 'Correction auto de luminosité',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26966
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:AutoLightingOptimizer',
      'desc' => [
        'en' => 'Auto Lighting Optimizer',
        'fr' => 'Correction auto de luminosité',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 35671
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:AutoLightingOptimizer',
      'desc' => [
        'en' => 'Auto Lighting Optimizer',
        'fr' => 'Correction auto de luminosité',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::LightingOpt
       * line : 64218
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::LightingOpt.Canon:AutoLightingOptimizer',
      'desc' => [
        'en' => 'Auto Lighting Optimizer',
        'fr' => 'Correction auto de luminosité',
      ],
    ],
  ];

}
