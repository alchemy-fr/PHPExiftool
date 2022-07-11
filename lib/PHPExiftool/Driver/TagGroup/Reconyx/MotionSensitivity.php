<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MotionSensitivity extends AbstractTagGroup
{

  protected string $id = 'Reconyx:MotionSensitivity';

  protected string $name = 'MotionSensitivity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Motion Sensitivity',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 331144
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Main.Reconyx:MotionSensitivity',
      'desc' => [
        'en' => 'Motion Sensitivity',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331653
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:MotionSensitivity',
      'desc' => [
        'en' => 'Motion Sensitivity',
      ],
    ],
  ];

}
