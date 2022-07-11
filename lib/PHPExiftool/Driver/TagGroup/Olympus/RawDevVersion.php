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
class RawDevVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevVersion';

  protected string $name = 'RawDevVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Dev Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260564
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevVersion',
      'desc' => [
        'en' => 'Raw Dev Version',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260756
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevVersion',
      'desc' => [
        'en' => 'Raw Dev Version',
      ],
    ],
  ];

}
