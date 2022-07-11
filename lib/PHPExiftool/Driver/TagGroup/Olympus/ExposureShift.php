<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureShift extends AbstractTagGroup
{

  protected string $id = 'Olympus:ExposureShift';

  protected string $name = 'ExposureShift';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Shift',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 250946
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:ExposureShift',
      'desc' => [
        'en' => 'Exposure Shift',
      ],
    ],
  ];

}
