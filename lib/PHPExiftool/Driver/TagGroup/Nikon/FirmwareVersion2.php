<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion2 extends AbstractTagGroup
{

  protected string $id = 'Nikon:FirmwareVersion2';

  protected string $name = 'FirmwareVersion2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware Version 2',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209646
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:FirmwareVersion2',
      'desc' => [
        'en' => 'Firmware Version 2',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209729
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:FirmwareVersion2',
      'desc' => [
        'en' => 'Firmware Version 2',
      ],
    ],
  ];

}
