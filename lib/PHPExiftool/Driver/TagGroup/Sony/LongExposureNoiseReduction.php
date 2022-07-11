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
class LongExposureNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Sony:LongExposureNoiseReduction';

  protected string $name = 'LongExposureNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Long Exposure Noise Reduction',
    'fr' => 'Réduct. bruit longue expo.',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347878
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349309
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350999
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 354290
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360818
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388117
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LongExposureNoiseReduction',
      'desc' => [
        'en' => 'Long Exposure Noise Reduction',
        'fr' => 'Réduct. bruit longue expo.',
      ],
    ],
  ];

}
