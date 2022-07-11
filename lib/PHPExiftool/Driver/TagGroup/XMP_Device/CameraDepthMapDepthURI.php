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
class CameraDepthMapDepthURI extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:CameraDepthMapDepthURI';

  protected string $name = 'CameraDepthMapDepthURI';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Depth Map Depth URI',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396871
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::Device.XMP-Device:CameraDepthMapDepthURI',
      'desc' => [
        'en' => 'Camera Depth Map Depth URI',
      ],
    ],
  ];

}
