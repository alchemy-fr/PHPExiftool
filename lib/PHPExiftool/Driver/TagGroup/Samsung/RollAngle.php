<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RollAngle extends AbstractTagGroup
{

  protected string $id = 'Samsung:RollAngle';

  protected string $name = 'RollAngle';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Roll Angle',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::OrientationInfo
       * line : 334415
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::OrientationInfo.Samsung:RollAngle',
      'desc' => [
        'en' => 'Roll Angle',
      ],
    ],
  ];

}
