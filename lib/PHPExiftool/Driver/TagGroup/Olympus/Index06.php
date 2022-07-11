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
class Index06 extends AbstractTagGroup
{

  protected string $id = 'Olympus:Index06';

  protected string $name = 'Index06';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Index 06',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::WAV
       * line : 262631
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::WAV.Olympus:Index06',
      'desc' => [
        'en' => 'Index 06',
      ],
    ],
  ];

}
