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
class Sharpness extends AbstractTagGroup
{

  protected string $id = 'Sony:Sharpness';

  protected string $name = 'Sharpness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sharpness',
    'fr' => 'Accentuation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347753
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349241
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 354254
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388554
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
  ];

}
