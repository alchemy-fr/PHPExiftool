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
class AppInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:AppInfo';

  protected string $name = 'AppInfo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'App Info',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396835
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::Device.XMP-Device:AppInfo',
      'desc' => [
        'en' => 'App Info',
      ],
    ],
  ];

}
