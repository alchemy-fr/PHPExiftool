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
class CameraPointCloudMetric extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:CameraPointCloudMetric';

  protected string $name = 'CameraPointCloudMetric';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Point Cloud Metric',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396961
       * type : boolean
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::Device.XMP-Device:CameraPointCloudMetric',
      'desc' => [
        'en' => 'Camera Point Cloud Metric',
      ],
    ],
  ];

}
