<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareDate extends AbstractTagGroup
{

  protected string $id = 'Reconyx:FirmwareDate';

  protected string $name = 'FirmwareDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware Date',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 330936
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Main.Reconyx:FirmwareDate',
      'desc' => [
        'en' => 'Firmware Date',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331400
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:FirmwareDate',
      'desc' => [
        'en' => 'Firmware Date',
      ],
    ],
  ];

}
