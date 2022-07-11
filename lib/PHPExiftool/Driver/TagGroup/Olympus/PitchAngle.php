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
class PitchAngle extends AbstractTagGroup
{

  protected string $id = 'Olympus:PitchAngle';

  protected string $name = 'PitchAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pitch Angle',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 253352
       * type : int16s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:PitchAngle',
      'desc' => [
        'en' => 'Pitch Angle',
      ],
    ],
  ];

}
