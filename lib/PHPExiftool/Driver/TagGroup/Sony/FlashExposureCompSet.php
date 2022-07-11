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
class FlashExposureCompSet extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashExposureCompSet';

  protected string $name = 'FlashExposureCompSet';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Comp. Setting',
    'fr' => 'Réglage de compensation d\'exposition au flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347498
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:FlashExposureCompSet',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting',
        'fr' => 'Réglage de compensation d\'exposition au flash',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349066
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:FlashExposureCompSet',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting',
        'fr' => 'Réglage de compensation d\'exposition au flash',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350964
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:FlashExposureCompSet',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting',
        'fr' => 'Réglage de compensation d\'exposition au flash',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361139
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashExposureCompSet',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting',
        'fr' => 'Réglage de compensation d\'exposition au flash',
      ],
    ],
  ];

}
