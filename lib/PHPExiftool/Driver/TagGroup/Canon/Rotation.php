<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rotation extends AbstractTagGroup
{

  protected string $id = 'Canon:Rotation';

  protected string $name = 'Rotation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rotation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfoPowerShot
       * line : 55386
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot.Canon:Rotation',
      'desc' => [
        'en' => 'Rotation',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfoPowerShot2
       * line : 55475
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoPowerShot2.Canon:Rotation',
      'desc' => [
        'en' => 'Rotation',
      ],
    ],
  ];

}
