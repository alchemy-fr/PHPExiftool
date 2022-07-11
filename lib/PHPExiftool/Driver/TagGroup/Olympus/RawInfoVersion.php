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
class RawInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawInfoVersion';

  protected string $name = 'RawInfoVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Info Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261180
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:RawInfoVersion',
      'desc' => [
        'en' => 'Raw Info Version',
      ],
    ],
  ];

}
