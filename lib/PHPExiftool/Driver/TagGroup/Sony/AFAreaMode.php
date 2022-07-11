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
class AFAreaMode extends AbstractTagGroup
{

  protected string $id = 'Sony:AFAreaMode';

  protected string $name = 'AFAreaMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Area Mode',
    'fr' => 'Mode de zone AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341917
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343094
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347400
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349009
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350970
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Main
       * line : 359323
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Main
       * line : 359371
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Tag9402
       * line : 385089
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9402.Sony:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
  ];

}
