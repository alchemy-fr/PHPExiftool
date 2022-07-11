<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PoseRotationY extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:PoseRotationY';

  protected string $name = 'PoseRotationY';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pose Rotation Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397125
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::Device.XMP-Device:PoseRotationY',
      'desc' => [
        'en' => 'Pose Rotation Y',
      ],
    ],
  ];

}
