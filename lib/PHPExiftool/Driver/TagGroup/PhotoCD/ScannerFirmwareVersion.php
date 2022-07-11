<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ScannerFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:ScannerFirmwareVersion';

  protected string $name = 'ScannerFirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scanner Firmware Version',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304115
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:ScannerFirmwareVersion',
      'desc' => [
        'en' => 'Scanner Firmware Version',
      ],
    ],
  ];

}
