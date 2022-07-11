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
class CameraPoseRotationX extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:CameraPoseRotationX';

  protected string $name = 'CameraPoseRotationX';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Pose Rotation X',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396985
       * type : real
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::Device.XMP-Device:CameraPoseRotationX',
      'desc' => [
        'en' => 'Camera Pose Rotation X',
      ],
    ],
  ];

}
