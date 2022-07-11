<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CPUFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Pentax:CPUFirmwareVersion';

  protected string $name = 'CPUFirmwareVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CPU Firmware Version',
    'fr' => 'Version de firmware de CPU',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299068
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:CPUFirmwareVersion',
      'desc' => [
        'en' => 'CPU Firmware Version',
        'fr' => 'Version de firmware de CPU',
      ],
    ],
  ];

}
