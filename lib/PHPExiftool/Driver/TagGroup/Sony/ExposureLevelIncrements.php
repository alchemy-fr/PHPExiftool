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
class ExposureLevelIncrements extends AbstractTagGroup
{

  protected string $id = 'Sony:ExposureLevelIncrements';

  protected string $name = 'ExposureLevelIncrements';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Level Increments',
    'fr' => 'Paliers de réglage d\'expo',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348615
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 349963
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ExposureLevelIncrements',
      'desc' => [
        'en' => 'Exposure Level Increments',
        'fr' => 'Paliers de réglage d\'expo',
      ],
    ],
  ];

}
