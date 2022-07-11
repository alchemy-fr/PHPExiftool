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
class CameraImagingModelPixelAspectRatio extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:CameraImagingModelPixelAspectRatio';

  protected string $name = 'CameraImagingModelPixelAspectRatio';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Imaging Model Pixel Aspect Ratio',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396931
       * type : real
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::Device.XMP-Device:CameraImagingModelPixelAspectRatio',
      'desc' => [
        'en' => 'Camera Imaging Model Pixel Aspect Ratio',
      ],
    ],
  ];

}
