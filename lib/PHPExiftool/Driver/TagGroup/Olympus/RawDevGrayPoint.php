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
class RawDevGrayPoint extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevGrayPoint';

  protected string $name = 'RawDevGrayPoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Dev Gray Point',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260584
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevGrayPoint',
      'desc' => [
        'en' => 'Raw Dev Gray Point',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260792
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevGrayPoint',
      'desc' => [
        'en' => 'Raw Dev Gray Point',
      ],
    ],
  ];

}
