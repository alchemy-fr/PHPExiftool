<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensFirmwareVersion extends AbstractTagGroup
{

  protected string $id = 'Panasonic:LensFirmwareVersion';

  protected string $name = 'LensFirmwareVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Firmware Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277658
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:LensFirmwareVersion',
      'desc' => [
        'en' => 'Lens Firmware Version',
      ],
    ],
  ];

}
