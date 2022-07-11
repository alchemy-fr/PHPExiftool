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
class ProfileCameraIndices extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:ProfileCameraIndices';

  protected string $name = 'ProfileCameraIndices';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Camera Indices',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397142
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::Device.XMP-Device:ProfileCameraIndices',
      'desc' => [
        'en' => 'Profile Camera Indices',
      ],
    ],
  ];

}
