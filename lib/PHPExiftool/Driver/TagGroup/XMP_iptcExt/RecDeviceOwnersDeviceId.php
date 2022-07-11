<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecDeviceOwnersDeviceId extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:RecDeviceOwnersDeviceId';

  protected string $name = 'RecDeviceOwnersDeviceId';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rec Device Owners Device Id',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 410042
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:RecDeviceOwnersDeviceId',
      'desc' => [
        'en' => 'Rec Device Owners Device Id',
      ],
    ],
  ];

}
