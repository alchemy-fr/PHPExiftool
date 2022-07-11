<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersionLookAhead extends AbstractTagGroup
{

  protected string $id = 'Canon:FirmwareVersionLookAhead';

  protected string $name = 'FirmwareVersionLookAhead';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware Version Look Ahead',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1DX
       * line : 9111
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DX.Canon:FirmwareVersionLookAhead',
      'desc' => [
        'en' => 'Firmware Version Look Ahead',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 17829
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:FirmwareVersionLookAhead',
      'desc' => [
        'en' => 'Firmware Version Look Ahead',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26244
       * type : undef
       * writable : true
       * count : 164
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:FirmwareVersionLookAhead',
      'desc' => [
        'en' => 'Firmware Version Look Ahead',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 34945
       * type : undef
       * writable : true
       * count : 184
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:FirmwareVersionLookAhead',
      'desc' => [
        'en' => 'Firmware Version Look Ahead',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 37251
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:FirmwareVersionLookAhead',
      'desc' => [
        'en' => 'Firmware Version Look Ahead',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51478
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:FirmwareVersionLookAhead',
      'desc' => [
        'en' => 'Firmware Version Look Ahead',
      ],
    ],
  ];

}
