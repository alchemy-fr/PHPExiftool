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
class RawDevArtFilter extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevArtFilter';

  protected string $name = 'RawDevArtFilter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Dev Art Filter',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 261032
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevArtFilter',
      'desc' => [
        'en' => 'Raw Dev Art Filter',
      ],
    ],
  ];

}
