<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Olympus:FlashSerialNumber';

  protected string $name = 'FlashSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Serial Number',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 255013
       * type : string
       * writable : true
       * count : 32
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:FlashSerialNumber',
      'desc' => [
        'en' => 'Flash Serial Number',
      ],
    ],
  ];

}
