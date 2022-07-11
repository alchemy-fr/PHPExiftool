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
class DriveMode extends AbstractTagGroup
{

  protected string $id = 'Minolta:DriveMode';

  protected string $name = 'DriveMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Drive Mode',
    'fr' => 'Mode de prise de vue',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177570
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:DriveMode',
      'desc' => [
        'en' => 'Drive Mode',
        'fr' => 'Mode de prise de vue',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181522
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:DriveMode',
      'desc' => [
        'en' => 'Drive Mode',
        'fr' => 'Mode de prise de vue',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185341
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:DriveMode',
      'desc' => [
        'en' => 'Drive Mode',
        'fr' => 'Mode de prise de vue',
      ],
    ],
  ];

}
