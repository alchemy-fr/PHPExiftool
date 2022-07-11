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
class CanonFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Canon:CanonFirmwareVersion';

  protected string $name = 'CanonFirmwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Canon Firmware Version',
    'fr' => 'Version de firmware',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 64569
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:CanonFirmwareVersion',
      'desc' => [
        'en' => 'Canon Firmware Version',
        'fr' => 'Version de firmware',
      ],
    ],
  ];

}
