<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensFirmware extends AbstractTagGroup
{

  protected string $id = 'Ricoh:LensFirmware';

  protected string $name = 'LensFirmware';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Firmware',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::SerialInfo
       * line : 334059
       * type : string
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Ricoh::SerialInfo.Ricoh:LensFirmware',
      'desc' => [
        'en' => 'Lens Firmware',
      ],
    ],
  ];

}
