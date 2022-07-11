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
class AELock extends AbstractTagGroup
{

  protected string $id = 'Sony:AELock';

  protected string $name = 'AELock';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Lock',
    'fr' => 'Verrouillage AE',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348326
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:AELock',
      'desc' => [
        'en' => 'AE Lock',
        'fr' => 'Verrouillage AE',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349718
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:AELock',
      'desc' => [
        'en' => 'AE Lock',
        'fr' => 'Verrouillage AE',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351493
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:AELock',
      'desc' => [
        'en' => 'AE Lock',
        'fr' => 'Verrouillage AE',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351672
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:AELock',
      'desc' => [
        'en' => 'AE Lock',
        'fr' => 'Verrouillage AE',
      ],
    ],
  ];

}
