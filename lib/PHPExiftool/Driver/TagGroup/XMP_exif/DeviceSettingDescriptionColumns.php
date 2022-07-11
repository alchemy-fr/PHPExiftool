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
class DeviceSettingDescriptionColumns extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:DeviceSettingDescriptionColumns';

  protected string $name = 'DeviceSettingDescriptionColumns';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Device Setting Description Columns',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405749
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::exif.XMP-exif:DeviceSettingDescriptionColumns',
      'desc' => [
        'en' => 'Device Setting Description Columns',
      ],
    ],
  ];

}
