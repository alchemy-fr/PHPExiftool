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
class DriveMode extends AbstractTagGroup
{

  protected string $id = 'Sony:DriveMode';

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
       * table_name : Sony::CameraSettings
       * line : 347047
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:DriveMode',
      'desc' => [
        'en' => 'Drive Mode',
        'fr' => 'Mode de prise de vue',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349978
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:DriveMode',
      'desc' => [
        'en' => 'Drive Mode',
        'fr' => 'Mode de prise de vue',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351271
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:DriveMode',
      'desc' => [
        'en' => 'Drive Mode',
        'fr' => 'Mode de prise de vue',
      ],
    ],
  ];

}
