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
class YawAngle extends AbstractTagGroup
{

  protected string $id = 'Samsung:YawAngle';

  protected string $name = 'YawAngle';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Yaw Angle',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::OrientationInfo
       * line : 334407
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Samsung::OrientationInfo.Samsung:YawAngle',
      'desc' => [
        'en' => 'Yaw Angle',
      ],
    ],
  ];

}
