<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'GoPro:FirmwareVersion';

  protected string $name = 'FirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Firmware Version',
    'fr' => 'Version de firmware',
  ];

  protected int $count = 15;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GPMF
       * line : 139833
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::GPMF.GoPro:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
    1 => [
      /**
       * table_name : GoPro::fdsc
       * line : 140402
       * type : string
       * writable : false
       * count : 15
       * flags : 
       */
      'id' => 'GoPro::fdsc.GoPro:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
  ];

}
