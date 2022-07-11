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
class ImageStabilization extends AbstractTagGroup
{

  protected string $id = 'Minolta:ImageStabilization';

  protected string $name = 'ImageStabilization';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Stabilization',
    'fr' => 'Stabilisation d\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 179573
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 180402
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 182626
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::ISInfoA100
       * line : 182836
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::ISInfoA100.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::Main
       * line : 183108
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    5 => [
      /**
       * table_name : Minolta::Main
       * line : 184080
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    6 => [
      /**
       * table_name : Minolta::Main
       * line : 185128
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
    7 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 186983
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
  ];

}
