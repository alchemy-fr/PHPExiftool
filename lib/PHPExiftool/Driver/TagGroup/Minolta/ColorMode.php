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
class ColorMode extends AbstractTagGroup
{

  protected string $id = 'Minolta:ColorMode';

  protected string $name = 'ColorMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Mode',
    'fr' => 'Mode colorimétrique',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 178328
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181235
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::Main
       * line : 183443
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183589
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
    4 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185699
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
  ];

}
