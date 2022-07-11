<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KyoceraRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'KyoceraRaw:FirmwareVersion';

  protected string $name = 'FirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Firmware Version',
    'fr' => 'Version de firmware',
  ];

  protected int $count = 10;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : KyoceraRaw::Main
       * line : 161062
       * type : string
       * writable : false
       * count : 10
       * flags : Permanent
       */
      'id' => 'KyoceraRaw::Main.KyoceraRaw:FirmwareVersion',
      'desc' => [
        'en' => 'Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
  ];

}
