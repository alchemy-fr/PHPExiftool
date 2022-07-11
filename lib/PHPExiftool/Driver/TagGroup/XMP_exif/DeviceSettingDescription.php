<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviceSettingDescription extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:DeviceSettingDescription';

  protected string $name = 'DeviceSettingDescription';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Device Setting Description',
    'fr' => 'Description des réglages du dispositif',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405731
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:DeviceSettingDescription',
      'desc' => [
        'en' => 'Device Setting Description',
        'fr' => 'Description des réglages du dispositif',
      ],
    ],
  ];

}
