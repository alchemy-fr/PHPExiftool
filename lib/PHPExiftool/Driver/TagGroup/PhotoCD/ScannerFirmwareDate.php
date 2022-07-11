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
class ScannerFirmwareDate extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:ScannerFirmwareDate';

  protected string $name = 'ScannerFirmwareDate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scanner Firmware Date',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304118
       * type : string
       * writable : false
       * count : 8
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:ScannerFirmwareDate',
      'desc' => [
        'en' => 'Scanner Firmware Date',
      ],
    ],
  ];

}
