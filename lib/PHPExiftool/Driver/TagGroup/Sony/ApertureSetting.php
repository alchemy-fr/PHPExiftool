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
class ApertureSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:ApertureSetting';

  protected string $name = 'ApertureSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Aperture Setting',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348083
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ApertureSetting',
      'desc' => [
        'en' => 'Aperture Setting',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349475
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ApertureSetting',
      'desc' => [
        'en' => 'Aperture Setting',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350101
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ApertureSetting',
      'desc' => [
        'en' => 'Aperture Setting',
      ],
    ],
  ];

}
