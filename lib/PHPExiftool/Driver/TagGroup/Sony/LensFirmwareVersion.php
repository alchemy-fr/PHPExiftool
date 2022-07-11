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
class LensFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Sony:LensFirmwareVersion';

  protected string $name = 'LensFirmwareVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lens Firmware Version',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351791
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LensFirmwareVersion',
      'desc' => [
        'en' => 'Lens Firmware Version',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag940c
       * line : 391350
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag940c.Sony:LensFirmwareVersion',
      'desc' => [
        'en' => 'Lens Firmware Version',
      ],
    ],
  ];

}
